<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Session;
use Stripe;
use PDF;
use Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\validator;

class PaymentController extends Controller
{

    public function show(){
        $cart=Cart::where('user_id',Auth::user()->id)->count();
        $items=Cart::where('user_id',Auth::user()->id)->get();
        $prices=Cart::where('user_id',Auth::user()->id)->get();
        $total_price=0;
        foreach($prices as $price){
            $total_price=$total_price+$price->price;
        }
        
        return view('form',compact('cart','items','total_price'));

    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $datas=Cart::where('user_id',Auth::user()->id)->get();
        foreach($datas as $data){
           $ordered=new Order();
           $ordered->user_id=Auth::user()->id;
           $ordered->name=Auth::user()->name;
           $ordered->address=Auth::user()->address;
           $ordered->email=Auth::user()->email;
           $ordered->product_id=$data->product_id;
           $ordered->title=$data->title;
           $ordered->price=$data->price;
           $ordered->phone=$data->phone;
           $ordered->payment_status='Paid with card';
           $ordered->delivery_status='Processing';
           $ordered->quantity=$data->quantity;
           $ordered->image=$data->image;
           $ordered->save();
        }
        $datas=Cart::where('user_id',Auth::user()->id)->delete();
        Alert::success('Your order was successful',' We will deliver your orders to you as soon as possible. Thanks for buying from us.');

        return redirect()->route('customer_order');

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

//     public function cart(Request $request){
//         $cart=Cart::where('user_id',Auth::user()->id)->count();
//         $items=Cart::where('user_id',Auth::user()->id)->get();
//         $prices=Cart::where('user_id',Auth::user()->id)->get();
//         $total_price=0;
//         foreach($prices as $price){
//             $total_price=$total_price+$price->price;
//         }
        
//         return redirect()->route('form',compact('cart','items','total_price'));

//   }

}