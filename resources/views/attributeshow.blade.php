@extends('layouts.app')
@section('pageTitle', "$attribute->attributeName")
@section('content')
<head>
  <link href="{{ asset('css/categoryshow.css') }}" rel="stylesheet">
</head>
<h2 class="categorynametittle">{{$attribute->attributeName}}</h2>

<div class="productcategory" style="margin: 0 auto">
@foreach ($attribute->products as $product)
  <div class="producto" style="margin: 0 auto">
    <div class="img-producto-container" style="width: 100%; height: 60%;">
      <img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
    </div>
    <div class="info-producto-container">
      <h3>{{$product->productName}}</h3>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$product->id}}">
        Mas Info
      </button>
      <!-- Modal -->
      <div class="modal fade welcome" id="exampleModalCenter{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <div class="modal-header welcome">
              <h5 class="modal-title" id="exampleModalLongTitle">{{$product->productName}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body welcome">

              <div class="img-producto-container-welcome">
              <img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
              </div>

              <div class="descriptionModal">
              <p class="proddescmodal">{{$product->productDescription}}</p>

                <p class="prodpricemodal">Precio: <strong>{{$product->price}}</strong></p>

                <a id="addtocartmodal" href="/product/addtocart/{{$product->id}}"><button type="button" class="btn btn-success"><i class="fas fa-shopping-cart navbutton" id="productCart"></i></button></a>
              </div>

            </div>


          </div>
        </div>
      </div>
      <a href="/product/addtocart/{{$product->id}}"><button type="button" class="btn btn-success"><i class="fas fa-shopping-cart navbutton" id="productCart"></i></button></a>
    </div>
  </div>
@endforeach
</div>

{{-- {{ $category->products[]->productName }} --}}

@endsection
