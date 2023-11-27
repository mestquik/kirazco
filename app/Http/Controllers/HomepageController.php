<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {

        return view('pages.homepage');
    }

    public function productDetail(Product $product)
    {


        return view('pages.product-details',compact('product'));
    }

}
