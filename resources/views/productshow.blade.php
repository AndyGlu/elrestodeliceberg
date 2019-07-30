@extends('layouts.app')
@section('pageTitle', "$product->productName")
@section('content')
  <head>
    <link href="{{ asset('css/indexstyles.css') }}" rel="stylesheet">
  </head>

<div class="card" style="overflow:hidden">
  {{-- DIV IMAGEN --}}
  <div class="" style="float:left">

	<div class="row no-gutters">
<article class="gallery-wrap">
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="{{Storage::url($product->img1)}}" style="width:80%; height:80%">
</div> <!-- slider-nav.// -->
</div>
</article> <!-- gallery-wrap .end// -->
</div>
</div>

{{-- DIV INFO --}}
	<div class="" style="float:left">

<article class="p-5">
	<h3 class="title mb-3">{{$product->productName}}</h3>

<div class="mb-3">
	<var class="price h3 text-warning">
		<span class="currency">$</span><span class="num">{{$product->price}}</span>
	</var>
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Descripción</dt>
  <dd><p>{{$product->productDescription}}</p></dd>
</dl>
<dl class="row">
  <dt class="col-sm-3">Categorías</dt>
  <dd class="col-sm-9">ACA VAN LAS CATEGORIAS</dd>

  <dt class="col-sm-3">Dietas</dt>
  <dd class="col-sm-9">ACA VAN LAS DIETAS</dd>

  <dt class="col-sm-3">Atributos</dt>
  <dd class="col-sm-9">ACA VAN LOS ATRIBUTOS</dd>
</dl>

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="dlist-inline">
			  <dt>Cantidad: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
            <option> 6 </option>
            <option> 7 </option>
            <option> 8 </option>
            <option> 9 </option>            <option> 10 </option>


			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
</div>
<div class="max-installments m-top-none d-inline">Hasta <strong class="js-installment-amount installment-amount">12</strong> cuotas</div>
<br>
<embed type="image/svg+xml" style="height:2em; width:2em" src="https://image.flaticon.com/icons/svg/349/349221.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/1148/1148069.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/179/179431.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/25/25246.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/138/138255.svg" />

	<hr>
	<a href="#" class="btn  btn-primary"> Comprar </a>
	<a href="#" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Agregar al carrito </a>
</article> <!-- card-body.// -->
  </div>

@endsection
