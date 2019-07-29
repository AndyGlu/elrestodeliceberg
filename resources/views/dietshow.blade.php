@extends('layouts.app')
@section('pageTitle', "$diet->dietType")
@section('content')

<head>
  <link href="{{ asset('css/categoryshow.css') }}" rel="stylesheet">
</head>

<h2 class="categorynametittle">{{$diet->dietType}}</h2>

<div class="productcategory" style="margin: 0 auto">
@foreach ($diet->products as $product)
  <div class="producto" style="margin: 0 auto">
    <div class="img-producto-container" style="width: 100%; height: 60%;">
      <img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
    </div>
    <div class="info-producto-container">
      <h3>{{$product->productName}}</h3>
      {{-- <p>{{$product->productDescription}}</p> --}}
      <a href="#"><button type="button" class="btn btn-info">Mas info</button></a>
      <a href="/product/addtocart/{{$product->id}}"><button type="button" class="btn btn-success"><i class="fas fa-shopping-cart navbutton" id="productCart"></i></button></a>
    </div>
  </div>
@endforeach
</div>

{{-- {{ $category->products[]->productName }} --}}

@endsection
