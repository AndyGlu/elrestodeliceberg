@extends('layouts.app')
@section('pageTitle', "Búsqueda")
@section('content')

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>

<h5 class="searchTittle">Resultado de la busqueda "{{$_GET['search']}}"</h5>

<div class="taggers">
<div class="dietResult">
  @foreach ($queryDietas as $diet)
    <div class="diet">
      <a class="resultbuttondiet" href="/diet/{{$diet->id}}"><button href="/diet/{{$diet->id}}" type="button" class="btn btn-outline-success btn-sm"><p class="resultAttribute">{{$diet->dietType}}</p></button></a>
    </div>
  @endforeach
</div>
<div class="attributeResult">
  @foreach ($queryAtributos as $attribute)
    <div class="attribute">
      <a class="resultbuttonattribute" href="/attribute/{{$attribute->id}}"><button href="/attribute/{{$attribute->id}}" type="button" class="btn btn-outline-success btn-sm"><p class="resultDiet" >{{$attribute->attributeName}}</p></button></a>
    </div>
  @endforeach
</div>
</div>



<div class="productcategory">
@forelse ($queryProductos as $product)
  <div class="producto">
    <div class="img-producto-container">
      <img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
    </div>
    <div class="info-producto-container">
      <a style="color:black; text-decoration:none" href="/productshow/{{$product->id}}"> <h3>{{$product->productName}}</h3></a>
      <p style="margin: 0;"><strong>${{$product->price}}</strong></p>
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
@empty
  <p>Sin resultados en Productos</p>
@endforelse
</div>

@endsection
