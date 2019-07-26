@extends('layouts/app')

@section('title', 'Detalle del carrito ')

@section('content')
<head>
  <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
</head>

<body>
<h2>Cart</h2>
        @forelse ($cart as $item)
          <p>{{$item->name}}</p>
          <div class="cartimgprodcont">
            <img class="cartprodimg" src="/storage/products/{{$item->featured_img}}" alt="">
          </div>
          <form class="" action="/cart/{{$item->id}}" method="post">
              @csrf
              <input type="number" id="cant-product" name="cant" value="{{$item->cant}}"  min="1" max="10">
              <input type="submit" name="" value="Asegurar">
          </form>


          <form class="butom-elminar" action="/cart/{{$item->id}}" method="post">
              @csrf <!--Capa de seguridad Obligatoria para Laravel-->
              {{ method_field('DELETE') }}
              <!-- lo de arriba equivale a <input type="hidden" name="_method" value= "delete" > -->
              <input type="submit" name="" value="Eliminar producto">
          </form>
        @empty
          <p>El carrito esta vacío</p>
        @endforelse

<a href="/resumen" class="btn btn-primary ">comprar</a>
@endsection

</body>
