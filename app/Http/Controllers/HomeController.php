<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ===== Home Pages =====
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function Blogs()
    {
        return view('frontend.blogs');
    }

    public function showBlogDetails()
    {
        return view('frontend.blog-details');
    }

    public function policies()
    {
        return view('frontend.policies');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function page404()
    {
        return view('frontend.404');
    }

    public function productdetail()
    {
        return view('frontend.productdetail');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    // ===== Authentication Pages =====
    public function login()
    {
        return view('frontend.login');
    }

    public function signup()
    {
        return view('frontend.signup');
    }

    public function showForgotPasswordForm()
    {
        return view('frontend.forgot-password');
    }

    public function showResetPasswordForm()
    {
        return view('frontend.reset-password');
    }

    // ===== Order and Checkout Pages =====
    public function orderhistory()
    {
        return view('frontend.orderhistory');
    }

    public function cancel()
    {
        return view('frontend.cancel');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function orderconfirmation()
    {
        return view('frontend.orderconfirmation');
    }

    public function ordersummary()
    {
        return view('frontend.order-summary');
    }

    public function paymentconfirmation()
    {
        return view('frontend.payment-confirmation');
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }

    // ===== Store & Collection Pages =====
    public function storelocator()
    {
        return view('frontend.storelocator');
    }

    public function collectiondetails()
    {
        return view('frontend.collectiondetails');
    }

    // ===== Customization & Guide Pages =====
    public function customjewellery()
    {
        return view('frontend.customjewellery');
    }

    public function ourstory()
    {
        return view('frontend.ourstory');
    }

    public function jewellerycareguide()
    {
        return view('frontend.jewellerycareguide');
    }

    public function gemstone()
    {
        return view('frontend.gemstone');
    }

    public function morejewellery()
    {
        return view('frontend.morejewellery');
    }

    public function allcollection()
    {
        return view('frontend.allcollection');
    }

    // ===== Appointment & Knowledge Pages =====
    public function appointment()
    {
        return view('frontend.appointment');
    }

    public function knowmore()
    {
        return view('frontend.knowmore');
    }

    public function know()
    {
        return view('frontend.know');
    }

    public function policy()
    {
        return view('frontend.policy');
    }

    public function daimondguide()
    {
        return view('frontend.daimondguide');
    }

    public function jewelleryguide()
    {
        return view('frontend.jewelleryguide');
    }

    public function goldrate()
    {
        return view('frontend.goldrate');
    }

    // ===== Order Status & Miscellaneous Pages =====
    public function order()
    {
        return view('frontend.order');
    }

    public function postcard()
    {
        return view('frontend.postcard');
    }

    public function shipping()
    {
        return view('frontend.shipping');
    }

    public function glosarry()
    {
        return view('frontend.glosarry');
    }

    public function egold()
    {
        return view('frontend.egold');
    }

    // ===== Second Navbar Pages =====
    public function men()
    {
        return view('frontend.men');
    }

    public function women()
    {
        return view('frontend.women');
    }

    public function kids()
    {
        return view('frontend.kids');
    }

    // ===== Web Stories & Collaborations =====
    public function webstories()
    {
        return view('frontend.webstories');
    }

    public function Collaborations()
    {
        return view('frontend.Collaborations');
    }

    public function WhatNew()
    {
        return view('frontend.WhatNew');
    }

    public function occasion()
    {
        return view('frontend.occasion');
    }

    public function Jewellerycaretips()
    {
        return view('frontend.Jewellerycaretips');
    }

    public function Jewelleryguides()
    {
        return view('frontend.Jewelleryguides');
    }

    public function Jewellerystylingideas()
    {
        return view('frontend.Jewellerystylingideas');
    }

    public function calculate()
    {
        return view('frontend.calculate');
    }

    public function shaya()
    {
        return view('frontend.shaya');
    }

    public function necklace()
    {
        return view('frontend.necklace');
    }

    public function stories()
    {
        return view('frontend.stories');
    }

    public function wearyourwins()
    {
        return view('frontend.wearyourwins');
    }

    // ===== Press & Store Finder =====
    public function press()
    {
        return view('frontend.press');
    }

    public function findstore()
    {
        return view('frontend.findstore');
    }

    // ===== All Jewellery Pages =====
    public function rings()
    {
        return view('frontend.jewellery.rings');
    }

    public function earrings()
    {
        return view('frontend.jewellery.earrings');
    }

    public function braceletsBangles()
    {
        return view('frontend.jewellery.bracelets-bangles');
    }

    public function solitaires()
    {
        return view('frontend.jewellery.solitaires');
    }

    public function mangalsutras()
    {
        return view('frontend.jewellery.mangalsutras');
    }

    public function necklaces()
    {
        return view('frontend.jewellery.necklaces');
    }

    // ===== My Account Pages =====
    public function myaccount()
    {
        return view('frontend.user.myaccount.orders');
    }

    public function myaccount_edit()
    {
        return view('frontend.user.myaccount.edit');
    }

    public function myaccount_manage_refunds()
    {
        return view('frontend.user.myaccount.manage_refunds');
    }

    public function myaccount_tah()
    {
        return view('frontend.user.myaccount.tah');
    }

    public function myaccount_coupons()
    {
        return view('frontend.user.myaccount.coupons');
    }

    public function myaccount_payment()
    {
        return view('frontend.user.myaccount.payment');
    }

    public function myaccount_orders()
    {
        return view('frontend.user.myaccount.orders');
    }

    public function myaccount_profile()
    {
        return view('frontend.user.myaccount.profile');
    }

    public function myaccount_planofpurchase()
    {
        return view('frontend.user.myaccount.planofpurchase');
    }
}
