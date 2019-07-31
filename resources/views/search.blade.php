@extends('layouts.app')
@section('pageTitle', "Búsqueda")
@section('content')

<h2>Resultado</h2>

<div class="productcategory">
@forelse ($queryProductos as $product)
  <div class="producto">
    <div class="img-producto-container">
      <img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
    </div>
    <div class="info-producto-container">
      <h3>{{$product->productName}}</h3>
      <p>{{$product->productDescription}}</p>
      <a href="#"><button type="button" class="btn btn-info">Mas info</button></a>
      <a href="/product/addtocart/{{$product->id}}"><button type="button" class="btn btn-success"><i class="fas fa-shopping-cart navbutton" id="productCart"></i></button></a>
    </div>
  </div>
@empty
  <p>Sin resultados en Productos</p>
@endforelse
</div>
<div class="dietResult">
@forelse ($queryDietas as $diet)
  <div class="diet">
    <div class="dietResultInfo">
      <h3>{{$diet->dietType}}</h3>
      <p>{{$diet->dietDescription}}</p>
      href="/diet/{{$diet->id}}"
    </div>
  </div>
@empty
  <p>Sin resultados en Dietas</p>
@endforelse
</div>

@endsection
