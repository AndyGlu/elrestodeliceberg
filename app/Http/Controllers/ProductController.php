<?php

namespace App\Http\Controllers;

use App\Product;
use App\Diet;
use App\Category;
use App\Cart;
use App\Attribute;
use Illuminate\Support\Facades\DB;

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
      $diets = Diet::all();
      $attributes = Attribute::all();
      return view('welcome', compact('products', 'categories', 'diets', 'attributes'));
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
      // dd($request->only('diets', 'attributes'));

      $category = Category::find($request->get('category'));

      $product = $category->products()->create([
        'productName' => $request->productName,
        'productDescription' => $request->productDescription,
        'stock' => $request->stock,
        'price' => $request->price,
        'img1' => $request->file('img1')->store('public/products'),
        'img2' => $request->hasFile('img2') ? $request->file('img2')->store('public/products') : null,
        'img3' => $request->hasFile('img3') ? $request->file('img3')->store('public/products') : null,
      ]);

       $product->diets()->attach($request->diets);
       $product->attributes()->attach($request->get('attributes'));
       // esto ultimo es para las relaciones y tablas pivot

      // dd($product);


      // $product = new Product;
      //  $product->productName = $request->productName;
      //  $product->productDescription = $request->productDescription;
      //  $product->stock = $request->stock;
      //  $product->price = $request->price;
      //  $product->img1 = $file;
      //  $product->img2 = $file;
      //  $product->img3 = $file;
      //
      //  // dd($product);
      //  $product->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      return view('productshow', [
        'product' => $product
      ]);
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

    public function search()
{
  // $diets = Diet::all();
  // $categories = Category::all();
  // $attributes = Attribute::all();

  // $products = Product::all('products')->WHERE('productName', 'LIKE', "%$search%")->get();
  // $products = DB::table('products')->where('productName', 'like', "%$search%")->get();;
  // dd($products);

  $products = Product::all();
  if (isset($_GET['search'])) {
    dd($_GET['search']);
  }
  // $search = $_GET['search'];
  $products = Product::where('productName', 'like', '%%' )->get();

  // return view('actores')->with('actores', $actores);
  return view('search', compact('products', $products));
}

}
