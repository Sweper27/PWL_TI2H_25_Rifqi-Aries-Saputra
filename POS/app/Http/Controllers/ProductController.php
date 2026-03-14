<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function food()
    {
        return view('products.food');
    }

    public function beauty()
    {
        return view('products.beauty');
    }

    public function homecare()
    {
        return view('products.homecare');
    }

    public function babykid()
    {
        return view('products.babykid');
    }
}