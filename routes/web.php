<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// General Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blogs', [HomeController::class, 'Blogs'])->name('blogs');
Route::get('/blog-details', [HomeController::class, 'showBlogDetails'])->name('blog.details');
Route::get('/policies', [HomeController::class, 'policies'])->name('policies');
Route::get('/404', [HomeController::class, 'page404'])->name('page.404');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');
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
Route::get('/storelocator', [HomeController::class, 'storelocator'])->name('storelocator');
Route::get('/collectiondetails', [HomeController::class, 'collectiondetails'])->name('collectiondetails');
Route::get('/customjewellery', [HomeController::class, 'customjewellery'])->name('customjewellery');
Route::get('/ourstory', [HomeController::class, 'ourstory'])->name('ourstory');
Route::get('/jewellerycareguide', [HomeController::class, 'jewellerycareguide'])->name('jewellerycareguide');
Route::get('/gemstone', [HomeController::class, 'gemstone'])->name('gemstone');
Route::get('/morejewellery', [HomeController::class, 'morejewellery'])->name('morejewellery');
Route::get('/allcollection', [HomeController::class, 'allcollection'])->name('allcollection');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('/knowmore', [HomeController::class, 'knowmore'])->name('knowmore');
Route::get('/know', [HomeController::class, 'know'])->name('know');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/daimondguide', [HomeController::class, 'daimondguide'])->name('daimondguide,');
Route::get('/jewelleryguide', [HomeController::class, 'jewelleryguide'])->name('jewelleryguide');
Route::get('/gemstoneguide', [HomeController::class, 'gemstoneguide'])->name('gemstoneguide');
Route::get('/goldrate', [HomeController::class, 'goldrate'])->name('goldrate');
Route::get('/order', [HomeController::class, 'order'])->name('order');
Route::get('/postcard', [HomeController::class, 'postcard'])->name('postcard');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('shipping');
Route::get('/glosarry', [HomeController::class, 'glosarry'])->name('glosarry');
Route::get('/egold', [HomeController::class, 'egold'])->name('egold');
Route::get('/wearyourwins', [HomeController::class, 'wearyourwins'])->name('wearyourwins');
Route::get('/press', [HomeController::class, 'press'])->name('press');
Route::get('/findstore', [HomeController::class, 'findstore'])->name('findstore');
Route::get('/men', [HomeController::class, 'men'])->name('men');
Route::get('/women', [HomeController::class, 'women'])->name('women');
Route::get('/kids', [HomeController::class, 'kids'])->name('kids');
Route::get('/webstories', [HomeController::class, 'webstories'])->name('webstories');
Route::get('/Collaborations', [HomeController::class, 'Collaborations'])->name('Collaborations');
Route::get('/WhatNew', [HomeController::class, 'WhatNew'])->name('WhatNew');
Route::get('/occasion', [HomeController::class, 'occasion'])->name('occasion');
Route::get('/Jewellerycaretips', [HomeController::class, 'Jewellerycaretips'])->name('Jewellerycaretips');
Route::get('/Jewelleryguides', [HomeController::class, 'Jewelleryguides'])->name('Jewelleryguides');
Route::get('/Jewellerystylingideas', [HomeController::class, 'Jewellerystylingideas'])->name('Jewellerystylingideas');
Route::get('/calculate', [HomeController::class, 'calculate'])->name('calculate');
Route::get('/shaya', [HomeController::class, 'shaya'])->name('shaya');
Route::get('/earing', [HomeController::class, 'earing'])->name('earing');
Route::get('/necklace', [HomeController::class, 'necklace'])->name('necklace');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories');

// Group Jewellery Routes
Route::prefix('/jewellery')->name('jewellery.')->group(function () {
    Route::get('/rings', [HomeController::class, 'rings'])->name('rings');
    Route::get('/earrings', [HomeController::class, 'earrings'])->name('earrings');
    Route::get('/bracelets-bangles', [HomeController::class, 'braceletsBangles'])->name('bracelets-bangles');
    Route::get('/solitaires', [HomeController::class, 'solitaires'])->name('solitaires');
    Route::get('/mangalsutras', [HomeController::class, 'mangalsutras'])->name('mangalsutras');
    Route::get('/necklaces', [HomeController::class, 'necklaces'])->name('necklaces');
});

// Group My Account Routes
Route::prefix('/myaccount')->name('myaccount.')->group(function () {
    Route::get('/', [HomeController::class, 'myaccount'])->name('index');
    Route::get('/edit', [HomeController::class, 'myaccount_edit'])->name('edit');
    Route::get('/manage_refunds', [HomeController::class, 'myaccount_manage_refunds'])->name('manage_refunds');
    Route::get('/tah', [HomeController::class, 'myaccount_tah'])->name('tah');
    Route::get('/coupons', [HomeController::class, 'myaccount_coupons'])->name('coupons');
    Route::get('/payment', [HomeController::class, 'myaccount_payment'])->name('payment');
    Route::get('/profile', [HomeController::class, 'myaccount_profile'])->name('profile');
    Route::get('/orders', [HomeController::class, 'myaccount_orders'])->name('orders');
    Route::get('/plan-of-purchase', [HomeController::class, 'myaccount_planofpurchase'])->name('plan-of-purchase');
});
