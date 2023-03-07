<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Middleware;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        $id=$request->id;
        $cart=Cart::where('user_id',Auth::user()->id)->count();
        $prices=Cart::where('user_id',Auth::user()->id)->get();
        $total_price=0;
        foreach($prices as $price){
            $total_price=$total_price+$price->price;
        }
        // $user_meta=Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->get();
        $products=Product::paginate(6);
        $number_order=Order::where('user_id',Auth::user()->id)->count();

        return view('home',compact('products','cart','total_price','number_order'));
    }

    public function show(){
        $pics=Product::all();
        return view('show',compact('pics'));
    }
}
