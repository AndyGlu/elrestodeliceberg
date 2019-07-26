<?php

namespace App\Http\Controllers;

use App\Product;
use App\Diet;
use App\Category;
use App\Cart;
use App\Attribute;


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
      $products = Product::all();
      $categories = Category::all();
      return view('welcome', compact('products', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $diets = Diet::all();
      $categories = Category::all();
      $carts = Cart::all();
      $attributes = Attribute::all();

      return view('create', compact('diets', 'categories', 'carts', 'attributes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = $request->file('img1')->store('public/products');
      $file = basename($path);
      // $path = $request->file('img2')->store('public/products');
      // $file = basename($path);
      // $path = $request->file('img3')->store('public/products');
      // $file = basename($path);

      $product = new Product;
       $product->productName = $request->productName;
       $product->productDescription = $request->productDescription;
       $product->stock = $request->stock;
       $product->price = $request->price;
       $product->img1 = $file;
       $product->img2 = $file;
       $product->img3 = $file;


       // dd($product);
       $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
