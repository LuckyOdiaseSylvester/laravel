<?php
use Illuminate\Support\Facades\Middleware;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//User Route
Route::get('/', function () {
//     $number_order=Order::all()->count();

//    $products=Product::paginate(10);
//     return view('welcome',compact('products','number_order'));



$number_order=Order::all()->count();

$products=Product::paginate(10);
 return view('welcome',compact('products','number_order'));
});

Route::get('/added_already', function () {
     return view('added_already');
 }); 
 Route::get ('/cancel/{id}', [App\Http\Controllers\AdminController::class, 'cancel'])->name('cancel')->middleware('auth','checkuser');

 Route::get ('/customer_order', [App\Http\Controllers\AdminController::class, 'customer_order'])->name('customer_order')->middleware('auth','checkuser');

 Route::get ('/ordered', [App\Http\Controllers\AdminController::class, 'ordered'])->name('ordered')->middleware('auth','checkuser');

 Route::get('/stripe/{total_price}', [App\Http\Controllers\AdminController::class, 'stripe'])->name('stripe')->middleware('auth','checkuser');
 
 Route::post('stripe', [App\Http\Controllers\AdminController::class,'stripePost'])->name('stripe.post');

 Route::get('/add_cart', [App\Http\Controllers\AdminController::class, 'add_cart'])->name('add_cart')->middleware('auth','checkuser');

 Route::post('/order/{id}', [App\Http\Controllers\AdminController::class, 'order'])->name('order')->middleware('auth','checkuser');
 Route::get('/search', [App\Http\Controllers\SearchController::class, 'Search'])->name('search')->middleware('auth','checkuser');

 Route::get('/product_details/{id}', [App\Http\Controllers\AdminController::class, 'product_details'])->name('product_details')->middleware('auth','checkuser');
 Route::get('/cart', [App\Http\Controllers\AdminController::class, 'cart'])->name('cart')->middleware('auth','checkuser');
 Route::get('/del/{id}', [App\Http\Controllers\AdminController::class, 'del'])->name('del')->middleware('auth','checkuser');
 Route::get('/contact', [App\Http\Controllers\AdminController::class, 'contact'])->name('contact')->middleware('auth','checkuser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','checkuser');

// Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show')->middleware('auth');
// Route::get('/add', [App\Http\Controllers\AdminController::class, 'add'])->name('add')->middleware('auth');
// Route::post('/letsee', [App\Http\Controllers\AdminController::class, 'letsee'])->name('letsee')->middleware('auth');

//Admin Route
Route::get('/add_category', [App\Http\Controllers\AdminController::class, 
'show'])->name('add_category')->middleware('auth','checkadmin');

Route::get('/blank-page', [App\Http\Controllers\AdminController::class, 
'blank'])->name('blank-page')->middleware('auth','checkadmin');

Route::post('/add-cat', [App\Http\Controllers\AdminController::class, 
'add_cat'])->name('add-cat')->middleware('auth','checkadmin');

Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 
'delete'])->name('delete')->middleware('auth','checkadmin');

Route::get('/index', [App\Http\Controllers\AdminController::class, 
'index'])->name('index')->middleware('auth','checkadmin');

Route::get('/add_product', [App\Http\Controllers\AdminController::class, 
'add_product'])->name('add_product')->middleware('auth','checkadmin');

Route::get('/show_product', [App\Http\Controllers\AdminController::class, 
'show_product'])->name('show_product')->middleware('auth','checkadmin');

Route::post('/add-pro', [App\Http\Controllers\AdminController::class, 
'add_pro'])->name('add-pro')->middleware('auth','checkadmin');

Route::get('/delete_pro/{id}', [App\Http\Controllers\AdminController::class, 
'delete_pro'])->name('delete_pro')->middleware('auth','checkadmin');

Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 
'edit'])->name('edit')->middleware('auth','checkadmin');

Route::get('/edit-product/{id}', [App\Http\Controllers\AdminController::class, 
'edit_product'])->name('edit-product')->middleware('auth','checkadmin');

Route::get('/view/{id}', [App\Http\Controllers\AdminController::class, 
'view_product'])->name('view')->middleware('auth','checkadmin');

Route::get('/approve/{id}', [App\Http\Controllers\AdminController::class, 
'approve'])->name('approve')->middleware('auth','checkadmin');

Route::get('/reject/{id}', [App\Http\Controllers\AdminController::class, 
'reject'])->name('reject')->middleware('auth','checkadmin');

Route::get('/can/{id}', [App\Http\Controllers\AdminController::class, 
'can'])->name('can')->middleware('auth','checkadmin');

Route::get('/deliver/{id}', [App\Http\Controllers\AdminController::class, 
'deliver'])->name('deliver')->middleware('auth','checkadmin');

Route::get('/print/{id}', [App\Http\Controllers\AdminController::class, 
'print'])->name('print')->middleware('auth','checkadmin');

//paystack



Route::get('getform','App\Http\Controllers\PaymentController@show')->name('form');
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);