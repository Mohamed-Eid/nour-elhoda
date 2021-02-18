<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(2);
        return view('frontend.products.index',compact('products'));
    }

    public function more(){
        $page = request()->page;
        $products = Product::take($page*2)->get();
        return view('frontend.products.ajax',compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(Product $product)
    {
        return view('frontend.products.show',compact('product'));
    }

}
