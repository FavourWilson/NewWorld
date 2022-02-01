<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Products;
use App\Models\User;
use App\Models\User\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index()
    {
        $user = User::all();
        $data = Products::join('subcategory', 'products.subcategoriesid', '=', 'subcategory.id')
        ->join('categories','products.categoriesid','=','categories.id')
        ->select('products.*', 'subcategory.brandname','categories.Companyname')
        ->get();

        $ca = cart::where('status','=',false)->get();
        $cart = cart::where('status','=',true)->get();
            return view("Admin/index")->with([
                "data" => $data,
                "user" => $user,
                'ca'=>$ca,
                'cart'=>$cart
          
              ]);
        
         /* if(Auth::check()){
            return view('Admin/index');
        }
        return redirect("Admin/Login/login")->withSuccess('You are not allowed to access');  */
    }
}
