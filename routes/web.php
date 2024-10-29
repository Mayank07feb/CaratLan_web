<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/alljewellery', [HomeController::class, 'alljewellery'])->name('alljewellery');

Route::get('/diamondjewellery', [HomeController::class, 'diamondjewellery'])->name('diamondjewellery');

Route::get('/gold', [HomeController::class, 'gold'])->name('gold');

Route::get('/bullions', [HomeController::class, 'bullions'])->name('bullions');

Route::get('/silver', [HomeController::class, 'silver'])->name('silver');

Route::get('/blogs', [HomeController::class, 'Blogs'])->name('blogs');

Route::get('/blog-details', [HomeController::class, 'showBlogDetails'])->name('blog.details');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/policies', [HomeController::class, 'policies'])->name('policies');

Route::get('/giritra-promises', [HomeController::class, 'giritraPromises'])->name('giritra.promises');

Route::get('/page404', [HomeController::class, 'page404'])->name('page404');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/profile/edit', [HomeController::class, 'profile_edit'])->name('profile.edit');

Route::get('/orderhistory', [HomeController::class, 'orderhistory'])->name('orderhistory');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');

Route::get('/orderconfirmation', [HomeController::class, 'orderconfirmation'])->name('orderconfirmation');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');

Route::get('/forgot-password', [HomeController::class, 'showForgotPasswordForm'])->name('forgot.password');

Route::get('/reset-password', [HomeController::class, 'showResetPasswordForm'])->name('password.reset');

// New Routes
Route::get('/ordersummary', [HomeController::class, 'ordersummary'])->name('ordersummary');

Route::get('/paymentconfirmation', [HomeController::class, 'paymentconfirmation'])->name('paymentconfirmation');

Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');

Route::get('/storelocator',[HomeController::class,'storelocator'])->name('storelocator');

Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');

Route::get('/collection', [HomeController::class, 'collection'])->name('collection');


Route::get('/collectiondetails', [HomeController::class, 'collectiondetails'])->name('collectiondetails');

Route::get('/customjewellery', [HomeController::class, 'customjewellery'])->name('customjewellery');

Route::get('/ourstory', [HomeController::class, 'ourstory'])->name('ourstory');

Route::get('/jewellerycareguide', [HomeController::class, 'jewellerycareguide'])->name('jewellerycareguide');

Route::get('/gemstone', [HomeController::class, 'gemstone'])->name('gemstone');
Route::get('/morejewellery', [HomeController::class,'morejewellery'])->name('morejewellery');
// veiw collection
Route::get('/allcollection',[HomeController::class,'allcollection'])->name('allcollection');
Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/knowmore', [HomeController::class,'knowmore'])->name('knowmore');
Route::get('/know',[HomeController::class,'know'])->name('know');
Route::get('/policy',[HomeController::class,'policy'])->name('policy');
Route::get('/daimondguide',[HomeController::class,'daimondguide'])->name('daimondguide,');
Route::get('/jewelleryguide',[HomeController::class,'jewelleryguide'])->name('jewelleryguide');
Route::get('/gemstoneguide',[HomeController::class,'gemstoneguide'])->name('gemstoneguide,');
Route::get('/goldrate',[HomeController::class,'goldrate'])->name('goldrate');
Route::get('/order',[HomeController::class,'order'])->name('order');
Route::get('/postcard',[HomeController::class,'postcard'])->name('postcard');
Route::get('/shipping',[HomeController::class,'shipping'])->name('shipping');
Route::get('/glosarry',[HomeController::class,'glosarry'])->name('glosarry');
Route::get('/egold',[HomeController::class,'egold'])->name('egold');
Route::get('/wearyourwins',[HomeController::class,'wearyourwins'])->name('wearyourwins');
Route::get('/press',[HomeController::class,'press'])->name('press');
Route::get('/findstore',[HomeController::class,'findstore'])->name('findstore');