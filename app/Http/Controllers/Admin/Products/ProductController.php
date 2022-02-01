<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Products;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Yoeunes\Toastr\Facades\Toastr;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Products::join('subcategory', 'products.subcategoriesid', '=', 'subcategory.id')
        ->join('categories','products.categoriesid','categories.id')
        ->select('products.*', 'subcategory.brandname','categories.Companyname')
        ->get();
        if ($data->count() > 0) {
            return view('Admin/Products/index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all(['id','companyname']);
        if($data->count() > 0){
            return view('Admin/Products/create',compact('data'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Products();

        $this->validate($request, [
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = array();

        if ($files = $request->file('photo')) {

            foreach ($files as $file) {
                $path = Cloudinary::upload($file->move('products/')->getRealPath())->getSecurePath();
                array_push($images, $path);  
            }
        }
        $data->photo = json_encode($images);
        $data->save();


        $this->validate($request, [
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        if ($request->hasFile('video')) {
            $path = cloudinary()->uploadvideo($request->file('video')->getRealPath())->getSecurePath();
            $data->video = $path;
        }
        $data->save();


        $data->productName = $request->pname;
        $data->categoriesid = $request->cate;
        $data->subcategoriesid = $request->subcate;
        $data->quantity = $request->quan;
        $data->windowsOS = $request->winos;
        $data->CPU = $request->cpu;
        $data->processor = $request->pro;
        $data->RAM = $request->ram;
        $data->Color = $request->color;
        $data->Screensize = $request->screensize;
        $data->storage = $request->storage;
        $data->price = $request->price;
        $data->save();
        if ($data->save()) {
            Toastr::success('Products created successfully', 'Success');
            return redirect('Admin/Products/index');
        } else {
            Toastr::error('Products could not be created successfully', 'Error');
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
        $data = Products::find($id);
         
            return view('Admin/Products/view')->with([
                'product'=>$data,
                'images' => json_decode($data->photo),
                'video' =>$data->video
            ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::where('id', $id)->get();
        if($products->count() > 0){
            $details = Category::all(['id','companyname']);
        }
        
        return view('Admin/Products/update', compact('products','details'));
        
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
        $data = Products::find($id);

        $this->validate($request, [
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = array();

        if ($files = $request->file('photo')) {

            foreach ($files as $file) {
                $path = Cloudinary::upload($file->move('products/')->getRealPath())->getSecurePath();
                array_push($images, $path);  
            }
        }
        $data->photo = json_encode($images);
        $data->save();


        $this->validate($request, [
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        if ($request->hasFile('video')) {
            $path = cloudinary()->uploadvideo($request->file('video')->getRealPath())->getSecurePath();
            $data->video = $path;
        }
        $data->save();


        $data->productName = $request->pname;
        $data->categoriesid = $request->cate;
        $data->subcategoriesid = $request->subcate;
        $data->quantity = $request->quan;
        $data->windowsOS = $request->winos;
        $data->CPU = $request->cpu;
        $data->processor = $request->pro;
        $data->RAM = $request->ram;
        $data->Color = $request->color;
        $data->Screensize = $request->screensize;
        $data->storage = $request->storage;
        $data->price = $request->price;

        $data->save();
        if ($data->save()) {
            Toastr::success('Products updated successfully', 'Success');
            return redirect('Admin/Products/index');
        } else {
            Toastr::error('Products could not be created successfully', 'Error');
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
        $data = Products::where('id', $id)->delete();
        if (!is_null($data)) {
            return back()->with("success", "Success! Products deleted");
        } else {
            return back()->with("failed", "Alert! Products not deleted");
        }
    }

    public function getSubCateByID($id)
    {
        $subcate = Subcategory::where('catergoriesid', '=', $id)->get();
        $returnCate = array();

        array_push($returnCate, "<label for='bname' class='form-label'>Sub Category</label>
        <select class='form-control' name='subcate' id='subcate'>");
        foreach($subcate as $su){
            array_push($returnCate, "<option value='$su->id'>$su->brandname</option>");
        }
        array_push($returnCate, "</select>");

        return $returnCate;
    }

    
}
