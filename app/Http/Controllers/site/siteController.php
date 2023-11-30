<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function getsite(){
        return view('site.index');
    }
    public function getProduct(){
        $products= Product::all();
        return view('site.product',compact('products'));
    }
    //////////////////////// Shop Controller ///////////////////////////////
    public function getshop(){
        $products= Product::all();
        return view('site.shop',compact('products'));
    }

    public function getdetails(){
        $products= Product::all();
        return view('site.details',compact('products'));
    }

    public function getcart(){
        $products= Product::all();
        return view('site.cart',compact('products'));
    }
}
