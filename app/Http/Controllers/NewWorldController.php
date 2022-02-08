<?php

namespace App\Http\Controllers;

use App\Models\Admin\carousel;
use App\Models\Admin\Category;
use App\Models\Admin\Products;
use App\Models\Admin\Subcategory;
use App\Models\User;
use App\Models\User\cart;
use App\Models\User\special;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class NewWorldController extends Controller
{
  public function index()
  {
    $nav = array();
    $cate = Category::all();

    foreach ($cate as $c) {
      $v = array();
      $subcate = Subcategory::where('catergoriesid', '=', $c->id)->get();

      foreach ($subcate as $s) {
        array_push($v, $s);
      }

      array_push($nav, [
        'category' => $c,
        'subcategory' => $v
      ]);
    }

    $data = Products::join('subcategory', 'products.subcategoriesid', '=', 'subcategory.id')
      ->join('categories', 'products.categoriesid', '=', 'categories.id')
      ->select('products.*', 'subcategory.brandname', 'categories.Companyname')
      ->get();

    

    $carousel = carousel::all();
    
    $cart = cart::join('products','cart.productid','=','products.id')
    ->join('users','cart.userid','=','users.id')
    ->select('cart.*','products.productName','products.price','products.photo')
    ->get();
    $total = 0;
    if($cart != null){
    foreach($cart as $c){
      $total = ($c->price * $c->quantity ) ;
    }
    
    return view('NewWorld/index')->with([
      'product' => $data,
      'nav' => $nav,
      'ca' =>$carousel,
      'cart'=>$cart,
      'total' => $total,

    ]);
    }

    return $cart->id;

    // return $data[0]->photo;


  }
  public function about()
  {

    return view('NewWorld/about');
  }

  public function  createUser(Request $request)
  {
    $data = new User();
    $data->name = $request->name;
    $data->phone = $request->phone;
    $data->email = $request->email;
    $data->password = Hash::make($request->password);

    $data->save();

    return redirect("NewWorld/index");

  }

  public function authUser(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required',
  ]);

  $product = $request->only('email', 'password');
  if (Auth::attempt($product)) {
      return redirect()->intended('NewWorld/index')
                  ->withSuccess('Signed in');
  }

  return redirect()->back()->withSuccess('Login details are not valid');
  }



  public function cart($userid)
  {
    if(Auth::check()){
      $userid = Auth::user()->id;
      $cart = cart::join('products','cart.productid','=','products.id')
      ->join('users','cart.userid','=','users.id')
      ->select('cart.*','products.productName','products.price','products.photo')
      ->where('cart.userid','=',$userid)
      ->get();
  
      $total = 0;
  
      foreach($cart as $c){
        $total += ($c->price * $c->quantity);
      }
          return view('NewWorld/cart')->with([
          'cart' => $cart,
          'total'=>$total
      ]);
    }else{
      return redirect("NewWorld/index");
    }
   
  }

 
  

  public function addDetails(Request $request)
  {
    if(Auth::check()){
      $cart = new cart();
      $cart->userid = Auth::user()->id;
      $cart->productid = $request->id;
      $cart->quantity = $request->quan;
      $cart->status = true;
      $cart->ipaddress = exec('getmac');
      $cart->save();
    
     return redirect('NewWorld/index');
    }else{
      $cart = new cart();
      $cart->userid = null;
      $cart->productid = $request->id;
      $cart->quantity = $request->quan;
      $cart->status = false;
      $cart->ipaddress = exec('getmac');
      $cart->save();


      return redirect('NewWorld/index');
    }
    
  }

  public function details($id)
  {
    $details = Products::join('subcategory', 'products.subcategoriesid', '=', 'subcategory.id')
    ->join('categories', 'products.categoriesid', '=', 'categories.id')
    ->select('products.*', 'subcategory.brandname', 'categories.Companyname')
    ->where('products.id','=',$id)
    ->get();
    return view('NewWorld/details')->with([
      'details' => $details
    ]);
  }

  public function carousel($id)
  {
    $car = carousel::find($id);
    return view('NewWorld/slide')->with([
      'ca'=> $car,
      'images' => $car->images,
    ]);
  }

  public function specialOffer($id)
  {
    if(Auth::check()){
      $id = Auth::user()->id;
      $cart = special::join('carousel','cart.carouselid','=','carousel.id')
      ->join('users','cart.userid','=','users.id')
      ->select('cart.*','carousel.adsname','carousel.productname','carousel.images','carousel.price')
      ->where('cart.userid','=',$id)
      ->get();
  
      $total = 0;
  
      foreach($cart as $c){
        $total += ($c->price * $c->quantity);
      }
          return view('NewWorld/cart')->with([
          'cart' => $cart,
          'total'=>$total
      ]);
    }else{
      return redirect("NewWorld/index");
    }
  }

  public function addSpecial(Request $request)
  {
    if(Auth::check()){
      $cart = new special();
      $cart->userid = Auth::user()->id;
      $cart->carouselid = $request->id;
      $cart->quantity = $request->quan;
      $cart->status = false;
      $cart->ipaddress = exec('getmac');
      $cart->save();
    
     return redirect('NewWorld/index');
    }else{
      $cart = new special();
      $cart->userid = null;
      $cart->carouselid = $request->id;
      $cart->quantity = $request->quan;
      $cart->status = false;
      $cart->ipaddress = exec('getmac');
      $cart->save();


      return redirect('NewWorld/index');
    }
    
  }


  public function contact()
  {
    return view("NewWorld/contact");
  }
  public function getLaptops($id, $sid)
  {
    
    $laptop = Products::join('subcategory', 'products.subcategoriesid', '=', 'subcategory.id')
    ->join('categories', 'products.categoriesid', '=', 'categories.id')
    ->select('products.*', 'subcategory.brandname', 'categories.Companyname')
    ->inRandomOrder()
    ->where('categories.id','=', $id)
    ->where('subcategory.id','=',$sid)
    ->get();

    return view('NewWorld/subcategory')->with([
      'details' => $laptop
    ]);
  }

  public function destroy($id)
  {
    $data = cart::where('id', $id)->delete();
        if (!is_null($data)) {
            return back()->with("success", "Success! Products deleted");
        } else {
            return back()->with("failed", "Alert! Products not deleted");
        }
  }
}
