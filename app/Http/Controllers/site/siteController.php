<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function getProduct(){
        $products= Product::all();
        return view('site.product',compact('products'));
    }
}
