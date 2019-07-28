@extends('layouts.app')
@section('pageTitle', "$product->productName")
@section('content')
<head>
  <link href="{{ asset('css/categoryshow.css') }}" rel="stylesheet">
</head>
<h2 class="categorynametittle">{{$product->productName}}</h2>
<div class="contenedor-producto-individual">
  <div class="contendor-producto-individual-img">

<img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
  </div>

  <div class="contenedor-producto-individual-info">

  </div>

</div>
@endsection
