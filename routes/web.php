<?php
//website
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\LoginController;
use App\Http\Controllers\website\HomepageContactController;
use App\Http\Controllers\website\CartController;
//dashbord
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\CotactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\website\UserProfileController;
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
//for website
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/product/cetagory/{id}',[HomeController::class,'ProductCetagory'])->name('website.product.cetagories');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/search/products/website',[HomeController::class,'website_Search'])->name('website.product.search');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/website/product-view/{id}',[HomeController::class,'product_view'])->name('website.product-view');
//website plant
Route::get('/plantlist',[HomeController::class,'plants'])->name('plantlist');
Route::get('/plant/cetagory/{id}',[HomeController::class,'PlantCetagory'])->name('website.plant.cetagories');
Route::get('/plant/details',[HomeController::class,'plantdetails'])->name('plantdetails');
Route::get('/plant/care',[HomeController::class,'plantcare'])->name('website.plantcare');
Route::get('/website/plant-view/{id}',[HomeController::class,'plantview'])->name('website.plant.view');



//login register
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/user/profile',[UserProfileController::class,'UserProfile'])->name('user.profile');
//edit & Update profile
Route::get('/profile/edit/{id}',[UserProfileController::class,'profile_edit'])->name('edit.profile');
Route::put('/profile/update/{id}',[UserProfileController::class,'profile_update'])->name('profile.update');

//login logout register
Route::post('/do/login',[LoginController::class,'dologin'])->name('dologin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register/store',[LoginController::class,'registerstore'])->name('registerStore');

//contact
Route::get('/contact/list',[HomepageContactController::class,'homecontactlist'])->name('home.contact');
Route::post('/contact/store',[HomepageContactController::class,'contactstore'])->name('contactStore');




// Route::get('/', function () {
//      return view('website.pages.home');
// });
Route::group(['middleware'=>['web_auth']],function(){
Route::get('/add/cart/{id}',[CartController::class,'AddCart'])->name('add.to.cart');
Route::get('/get/cart/',[CartController::class,'GetCart'])->name('get.cart');
Route::get('/clear/cart/',[CartController::class,'clearCart'])->name('clear.cart');
//cart
Route::get('/checkout',[CartController::class,'checkouttlist'])->name('website.checkout');
Route::get('/place/order',[CartController::class,'PlaceOrder'])->name('website.place.order');
//shipping details
Route::post('/shipping/address/save',[CartController::class,'shipping_address'])->name('shipping.details.store');

     });

   Route::get('admin_login',[AdminloginController::class,'adminLogin'])->name('admin.login');
  Route::post('/doAadmin/login',[AdminloginController::class,'doadminlogin'])->name('do.admin.login');
   

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
     Route::get('/', function () {
          return view('admin.master');
     })->name('admin'); 
     
Route::get('admin/logout',[AdminloginController::class,'adminLogout'])->name('admin.logout');
Route::get('/',[AdminController::class,'deshbord'])->name('admin');
//products
Route::get('/products',[ProductController::class,'productlist'])->name('productlist');
Route::get('/productcetagories',[ProductController::class,'categorylist'])->name('productcategories');
Route::get('/product/createcategory',[ProductController::class,'productcategory'])->name('productcreatecategory');
Route::post('/productcetagorystore',[ProductController::class,'pceragorystore'])->name('produccetagorytstore');
Route::post('/products/store',[ProductController::class,'productstore'])->name('productstore');
Route::get('/createproducts',[ProductController::class,'createproduct'])->name('productcreate');
 //view delete product
Route::get('/Product/view/{product_id}',[ProductController::class,'product_view'])->name('admin.product.view');
Route::get('/Product/delete/{product_id}',[ProductController::class,'product_delete'])->name('admin.product.delete');
 //edit product
Route::get('/product/edit/{product_id}',[ProductController::class,'product_edit'])->name('admin.product.edit');
 //update product
Route::put('/product/update/{product_id}',[ProductController::class,'product_update'])->name('admin.product.update');
//product search & print
Route::get('/search/products',[ProductController::class,'productSearch'])->name('product.search');
//plants
Route::get('/plants',[PlantsController::class,'plantlist'])->name('admin.plants');
Route::post('/plants/store',[PlantsController::class,'store'])->name('admin.plants.store');
Route::get('/plants/createplants',[PlantsController::class,'createplants'])->name('admin.plants.createplants');
//plantcategory
Route::get('/cetagories',[CategoryController::class,'categorylist'])->name('admin.plantcategories');
Route::post('/Categories/store',[CategoryController::class,'store'])->name('Categorystore');
Route::get('/categories/createcategory',[CategoryController::class,'createcategory'])->name('admin.plants.createcategory');
  //view delete plants
Route::get('/Plant/view/{plant_id}',[PlantsController::class,'plant_view'])->name('plant_view');
Route::get('/Plant/delete/{plant_id}',[PlantsController::class,'plant_delete'])->name('plant_delete');
  //edit plant
Route::get('/plant/edit/{plant_id}',[PlantsController::class,'plant_edit'])->name('admin.plant.edit');
 //update plant
Route::put('/plant/update/,{plant_id}',[PlantsController::class,'plant_update'])->name('admin.plant.update');
 //plant search & print
Route::get('/search/plantss',[PlantsController::class,'planttSearch'])->name('plant.search');
//orders
Route::get('/orders',[OrderController::class,'orderlist'])->name('admin.orders');
Route::get('/order/details',[OrderController::class,'OrderDetails'])->name('admin.order.details');
Route::get('/cancle/order/{id}',[OrderController::class,'CancelOrder'])->name('admin.order.cancel');
//payments
Route::get('/payments',[PaymentController::class,'paymentlist'])->name('admin.payments');
Route::post('/payments/store',[PaymentController::class,'store'])->name('paymentstore');
Route::get('/payments/create',[PaymentController::class,'createpayment'])->name('admin.payments.create');
//view delete payment
Route::get('/Payment/view/{Payment_id}',[PaymentController::class,'Payment_view'])->name('payment.view');
Route::get('/Payment/delete/{Payment_id}',[PaymentController::class,'Payment_delete'])->name('payment.delete');
//edit plant
Route::get('/payment/edit/{Payment_id}',[PaymentController::class,'Payment_edit'])->name('admin.payment.edit');
//update payment
Route::put('/payment/update/{Payment_id}',[PaymentController::class,'Payment_update'])->name('admin.payment.update');
//payment search & print
Route::get('/search/payment',[PaymentController::class,'paymenttSearch'])->name('payment.search');
//delivery
Route::get('/delivery',[DeliveryController::class,'deliverylist'])->name('admin.delivery');
Route::get('/shipping/details',[DeliveryController::class,'shipping_list'])->name('admin.shipping.details');
Route::post('/delivery/store',[DeliveryController::class,'store'])->name('deliverystore');
Route::get('/delivery/create',[DeliveryController::class,'Createdeliverylist'])->name('admin.delivery.create');
//contact
Route::get('/messege',[CotactController::class,'contactlist'])->name('admin.message');

//customers
Route::get('/customers',[CustomerController::class,'customerlist'])->name('admin.customer');
//view delete
});


