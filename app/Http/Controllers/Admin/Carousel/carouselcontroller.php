<?php

namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use App\Models\Admin\carousel;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class carouselcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = carousel::all();
        if($data->count() > 0){
            return view("Admin/Carousel/index",compact('data'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin/Carousel/create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new carousel();
        $data->adsname = $request->adsname;
        $data->productname = $request->pname;

        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->file('images')){
            $path = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
            $data->images = $path;

        }
        $data->save();

        $data->price = $request->price;
        $data->save();
        if ($data->save()) {
            Toastr::success('Carousel created successfully', 'Success');
            return redirect('Admin/Carousel/index');
        } else {
            Toastr::error('Carousel could not be created successfully', 'Error');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = carousel::where('id','=',$id)->get();
        return view("Admin/Carousel/update")->with([
            'car'=>$car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = carousel::find($id);
        $car->adsname = $request->adsname;
        $car->productname = $request->pname;

        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->file('images')){
            $path = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
            $car->images = $path;

        }
        $car->save();

        $car->price = $request->price;
        $car->save();
        if ($car->save()) {
            Toastr::success('Carousel updated successfully', 'Success');
            return redirect('Admin/Carousel/index');
        } else {
            Toastr::error('Carousel could not be updated successfully', 'Error');
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = carousel::where('id', $id)->delete();
        if (!is_null($data)) {
            return back()->with("success", "Success! Carousel deleted");
        } else {
            return back()->with("failed", "Alert! Carousel not deleted");
        }
    }
}
