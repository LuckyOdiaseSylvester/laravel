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
use PDF;
use Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\validator;
class AdminController extends Controller
{
   

    public function add_cat(Request $request){
        $validator=validator::make($request->all(),[
            'category'=>'required',
            ]);
         if($validator->fails()){
             return back()->withErrors($validator)->withInput();
         }   
         $add=new Category();
         $add->category=$request->category;
         $add->save();
         return redirect()->route('add_category',compact('add'))->with('add',"Category was added successfully!");
    }

    public function show(Request $request){
        $adds=Category::all();
        return view('add_category',compact('adds'));

    }

    public function delete(Request $request,$id){
        $add=Category::find($id)->delete();
        return redirect()->route('add_category')->with('delete',"Category was deleted successfully!");;

    }
    public function index(Request $request){
        $number=Product::all()->count();
        $orders=Product::all();
        $ordereds= Order::all();
         $total_ors=Order::all();
        $total_order=0;
        foreach($total_ors as $total_or){
            $total_order=$total_order+$total_or->price;
        }
        $total_revenue=0;
        foreach($orders as $order){
            $total_revenue=$total_revenue+$order->price;
        }

        return view('index', compact('number','total_revenue','ordereds','total_order'));
    }
    public function add_product(Request $request){
        $products=Category::all();
        return view('add_product',compact('products'));
    }
    public function show_product(Request $request){
        $products=Product::all();
        return view('show_product',compact('products'));
    }

    public function add_pro(Request $request){
        $validator=validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            // 'discount'=>'required',
            'quantity'=>'required',
            'category'=>'required',
            'image'=>'required',
            ]);
         if($validator->fails()){
             return back()->withErrors($validator)->withInput();
         }  
        //  if($request->hasFile('image')){
        //     $name=$request->file('image')->getClientOriginalName();
        //     $request->file('image')->storeAs('public/images/',$name);
        //     }
        $products=new Product();
        $products->title=$request->title;
        $products->description=$request->description;
        $products->price=$request->price;
        $products->discount=$request->discount;
        $products->quantity=$request->quantity;
        $products->category=$request->category;
        // $products->image=$name;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $products->image=$imagename;

        $products->save();
        return redirect()->route('show_product')->with('product',"Product added successfully!");
    }

    public function delete_pro(Request $request,$id){
        $add=Product::find($id)->delete();
        return redirect()->route('show_product')->with('delete',"Category was deleted successfully!");;
    }
    // public function edit_pro(Request $request,$id){
    //     $products=Product::find($id)->first();
    //     return view('edit',compact('product'));
    // }

    public function edit(Request $request,$id){
        $validator=validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            // 'discount'=>'required',
            'quantity'=>'required',
            'category'=>'required',
            'image'=>'required',
            ]);
         if($validator->fails()){
             return back()->withErrors($validator)->withInput();
         }  
        //  if($request->hasFile('image')){
        //     $name=$request->file('image')->getClientOriginalName();
        //     $request->file('image')->storeAs('public/images/',$name);
        //     }
        $categories=Category::all();
        $products=Product::find($id);
        $products->title=$request->title;
        $products->description=$request->description;
        $products->price=$request->price;
        $products->discount=$request->discount;
        $products->quantity=$request->quantity;
        $products->category=$request->category;
        // $products->image=$name;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $products->image=$imagename;

        $products->save();
        return redirect()->route('show_product',compact('categories'))->with('edit',"Product was  successfully updated!");;
            }

     public function edit_product(Request $request, $id){
        $products=Product::find($id);
        $categories=Category::all();
        return view('edit-product',compact('products','categories'));
    }

    public function view_product(Request $request, $id){
        $products=Product::find($id);
        return view('view',compact('products'));
    }
    

    
    public function product_details(Request $request,$id){
          $cart=Cart::where('user_id',Auth::user()->id)->first();
          $number_order=Order::all()->count();

        $products=Product::find($id);
        return view('product_details',compact('products','cart','number_order'));

    }
    public function add_cart(Request $request){
       
        return view('add_cart');
    }

    public function cart(Request $request){
          $cart=Cart::where('user_id',Auth::user()->id)->count();
          $items=Cart::where('user_id',Auth::user()->id)->get();
          $prices=Cart::where('user_id',Auth::user()->id)->get();
          $total_price=0;
          foreach($prices as $price){
              $total_price=$total_price+$price->price;
          }
          
        return view('cart',compact('cart','items','total_price'));

    }

    public function order(Request $request){
       $id=$request->id;

       $user=User::where('id',Auth::user()->id)->first();
       $product=Product::where('id',$id)->first();
       $cart=new Cart();
       $cart->user_id=Auth::user()->id;
       $cart->email=Auth::user()->email;
       $cart->product_id=$id;
       $cart->phone=Auth::user()->phone;
       $cart->address=Auth::user()->address;
       $cart->name=Auth::user()->name;
       $cart->quantity=$request->quantity;
       $cart->title=$product->title;
       $cart->image=$product->image;
       $quant=$request->quantity;
        if($quant>1){
       if($product->discount==null){
          $price=$product->price;
        $cart->price=$price*$quant;
       }
       else{
        $price= $product->discount;
        $cart->price=$price*$quant;
       }
    }
    else{
        if($product->discount==null){
          $cart->price=$product->price;
         }
         else{
          $cart->price=$product->discount;
         }
    }
       $user_meta=Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
       if($user_meta){
        Alert::success('Oops','This product has already been added to your cart.');

        return redirect()->route('home')->with('already','This product has already been added to your cart.');
       }
       else{
        $cart->save();
        Alert::success('Product added Successfully', "We have added product to the Cart");
        return redirect()->route('home')->with('edit',"Product was  successfully updated!");;

       }
    
        // return redirect()->route('home' ,compact('user_meta'))->with('edit',"Product was  successfully updated!");;

    }
    
    public function del(Request $request,$id){
        $del=Cart::find($id)->delete();
        Alert::success('Product cancelled Successfully', "It has been removed from the cart");
        return redirect()->route('cart');
    }
    
    public function ordered(Request $request){
        $datas=Cart::where('user_id',Auth::user()->id)->get();
        $number_order=Order::all()->count();

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
            $ordered->payment_status='Cash on delivery';
            $ordered->delivery_status='Processing';

            $ordered->quantity=$data->quantity;
            $ordered->image=$data->image;
            $ordered->save();
         }
         $datas=Cart::where('user_id',Auth::user()->id)->delete();
         Alert::success('Your order was successful',' We will deliver your orders to you as soon as possible. Thanks for buying from us.');

         return redirect()->route('customer_order', compact('number_order'));

    }

    public function stripe(Request $request, $total_price){

        return view('stripe',compact('total_price'));
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }

    public function customer_order(Request $request){
        $number_order=Order::all()->count();

        $customer=Order::where('user_id', Auth::user()->id)->count();
        $customer_orders=Order::where('user_id',Auth::user()->id)->get();
      
        return view('customer_order', compact('customer','customer_orders','number_order'));
    }
  
    public function cancel(Request $request, $id){
        $del=Order::find($id)->delete();
        Alert::success('This product was cancelled successfully','This product has already been cancelled.');

        return back();
    }

    public function approve(Request $request, $id){
        $del=Order::find($id);
        $del->delivery_status='Approved';
        $del->save();
        return back()->with('approve','The order was approved successfully');
    }

    public function reject(Request $request, $id){
        $del=Order::find($id);
        $del->delivery_status='Rejected';
        $del->save();
        return back()->with('reject','The order was rejected successfully');
    }

    public function can(Request $request, $id){
        $del=Order::find($id)->delete();
        return back()->with('can','The order was cancelled successfully');
    }

    public function deliver(Request $request, $id){
        $del=Order::find($id);
        $del->delivery_status='Delivered';
        $del->save();
        return back()->with('deliver','The order was delivered successfully');
    }
    public function print(Request $request, $id){
        $pdf_order=Order::find($id);
        $pdf=PDF::loadView('print',compact('pdf_order'));

        return $pdf->download('Order Details.pdf');
    } 

    public function contact(){
        $number_order=Order::all()->count();

        $cart=Cart::where('user_id',Auth::user()->id)->count();

    return view('contact', compact('cart','number_order'));
    }

}

