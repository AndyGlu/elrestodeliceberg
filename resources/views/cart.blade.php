@extends('layouts/app')

@section('title', 'Detalle del carrito ')

@section('content')
<head>
  <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
</head>

<body>
<div class="forelsecontainer">
  <h2>Carrito</h2>
        @forelse ($cart as $item)
          <div class="cartProductsContainer">
          <h5 class="prodTittle">{{$item->name}}</h5>
          <div class="cartimgprodcont">
            <img class="cartprodimg" src="{{Storage::url($item->featured_img)}}" alt="">
          </div>
          <form class="cantasegurar" action="/cart/{{$item->id}}" method="post">
              @csrf
              <div class="contadorCant">
                <input type="number" id="cant-product" name="cant" value="{{$item->cant}}"  min="1" max="10">
              </div>
          </form>

          <div class="priceShower">
            <p class="productPrice">${{$item->price}}</p>
          </div>

<div class="deleteProdButton">
  <form class="deleteButton" action="/cart/{{$item->id}}" method="post">
    @csrf <!--Capa de seguridad Obligatoria para Laravel-->
    {{ method_field('DELETE') }}
    <!-- lo de arriba equivale a <input type="hidden" name="_method" value= "delete" > -->
    <button type="submit" class="btn btn-light buttonDeleteDesk" value="Eliminar producto">Eliminar</button>
    <button type="submit" class="btn btn-light buttonDelete" value="Eliminar producto">X</button>

    {{-- <input type="submit" name="" value="Eliminar producto"> --}}
  </form>
</div>
</div>
        @empty
          <p>El carrito esta vacío</p>
        @endforelse

        <h6>Total:</h6> 
<br>
<a href="/" class="btn btn-primary coprarButton">Comprar</a>
</div>
<br>
@endsection

<script src="/js/main.js"></script>
</body>
