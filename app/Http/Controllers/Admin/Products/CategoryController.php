<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;

use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        if ($data->count() > 0) {
            return view('Admin/Category/index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->companyname = $request->cname;

        

        if ($data->save()) {
            Toastr::success('Category created successfully', 'Success');
            return redirect('Admin/Category/index');
        } else {
            Toastr::error('Category could not be created successfully', 'Error');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::where('id', $id)->get();
        if ($data->count() > 0) {
            return view('Admin/Category/update', compact('data'));
        }
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
        $data = Category::find($id);
        $data->companyname = $request->cname;

        
        $data->save();

        if ($data->save()) {
            Toastr::success('Category update successfully', 'Success');
            return redirect('Admin/Category/index');
        } else {
            Toastr::error('Category could not be update successfully', 'Error');
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
        $data = Category::where('id', $id)->delete();
        if (!is_null($data)) {
            return back()->with("success", "Success! Category deleted");
        } else {
            return back()->with("failed", "Alert! Category not deleted");
        }
    }
}
