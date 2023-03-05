<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Session;
use Stripe;
     
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\validator;

class SearchController extends Controller
{
    //

    public function Search(Request $request){
        $validator=validator::make($request->all(),[
            'product'=>'required',
            ]);
         if($validator->fails()){
             return back()->withErrors($validator)->withInput();
         } 
         $number_order=Order::all()->count();

        $search_text = $request->input('product');
        $cart=Cart::where('user_id',Auth::user()->id)->count();

        $products = DB::table('products')
        ->where('title','LIKE','%'.$search_text.'%')
                 //   ->orWhere('SurfaceArea','<', 10)
                 //   ->orWhere('LocalName','like','%'.$search_text.'%')
                   ->paginate(2);
         // return view('search',['countries'=>$countries]);
        //  dd($products);
         return view('home',compact('products','cart','number_order'));

 
        }
    //Physics360180@

}
