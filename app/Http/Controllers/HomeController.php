<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method for home page
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function alljewellery()
    {
        return view('frontend.alljewellery');
    }

    public function diamondjewellery()
    {
        return view('frontend.diamondjewellery');
    }

    public function silver()
    {
        return view('frontend.silver');
    }

    public function gold()
    {
        return view('frontend.gold');
    }

    public function bullions()
    {
        return view('frontend.bullions');
    }

    public function Blogs()
    {
        return view('frontend.blogs');
    }

    public function showBlogDetails()
    {
        return view('frontend.blog-details');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function policies()
    {
        return view('frontend.policies');
    }

    public function giritraPromises()
    {
        return view('frontend.giritra-promises');
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

    // Method for login page
    public function login()
    {
        return view('frontend.login');
    }

    // Method for signup page
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
    public function storelocator()
    {
        return view('frontend.storelocator');
    }
    // Method for franchise page
    public function franchise()
    {
        return view('frontend.franchise');
    }

    public function collection()
    {
        return view('frontend.collection');
    }

    public function collectiondetails()
    {
        return view('frontend.collectiondetails');
    }

    // cumtomize jewwlery
    public function customjewellery()
    {
        return view('frontend.customjewellery');
    }
    // OUR STORY
    public function ourstory()
    {
        return view('frontend.ourstory');
    }
    // care guide
    public function jewellerycareguide()
    {
        return view('frontend.jewellerycareguide');
    }
    // GEMSTONE
    public function gemstone()
    {
        return view('frontend.gemstone');
    }
    // more jewellery
    public function morejewellery()
    {
        return view('frontend.morejewellery');
    }
    // ALL COLLECTION
    public function allcollection()
    {
        return view('frontend.allcollection');
    }
    // Appointment
    public function appointment()
    {
        return view('frontend.appointment');
    }
    // KNOW MORE
    public function knowmore()
    {
        return view('frontend.knowmore');
    }
    // know more2
    public function know()
    {
        return view('frontend.know');
    }
    // POLICY
    public function policy()
    {
        return view('frontend.policy');
    }
    // DAIMOND GUIDE
    public function daimondguide()
    {
        return view('frontend.daimondguide');
    }
    // JEWELLERY GUIDE
    public function jewelleryguide()
    {
        return view('frontend.jewelleryguide');
    }
    // Gold Rate
    public function goldrate()
    {
        return view('frontend.goldrate');
    }
    // ORDER STATUS
    public function order()
    {
        return view('frontend.order');
    }
    // POST CARDS
    public function postcard()
    {
        return view('frontend.postcard');
    }
    // free shipping
    public function shipping()
    {
        return view('frontend.shipping');
    }
    // glosarry
    public function glosarry()
    {
        return view('frontend.glosarry');
    }
    // Egold
    public function egold()
    {
        return view('frontend.egold');
    }

    // second nav bar 
    // men 
    public function men()
    {
        return view('frontend.men');
    }
    // women
    public function women()
    {
        return view('frontend.women');
    }
    // kids
    public function kids()
    {
        return view('frontend.kids');
    }
    // webstories
    public function webstories()
    {
        return view('frontend.webstories');
    }
    // Collaborations
    public function Collaborations()
    {
        return view('frontend.Collaborations');
    }
    // What’s New
    public function WhatNew()
    {
        return view('frontend.WhatNew');
    }
    // occasion
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

    public function earing()
    {
        return view('frontend.earing');
    }
    public function necklace()
    {
        return view('frontend.necklace');
    }
    public function stories()
    {
        return view('frontend.stories');
    }

    //    wearyourwins
    public function wearyourwins()
    {
        return view('frontend.wearyourwins');
    }
    // press
    public function press()
    {
        return view('frontend.press');
    }
    // find a store
    public function findstore()
    {
        return view('frontend.findstore');
    }



    // * My Account * //

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
