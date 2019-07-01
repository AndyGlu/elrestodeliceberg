@extends('welcome')

@section('title', 'agregar producto')

@section('content')

<h2>Lista de productos</h2>
@forelse ($products as $product)
  <article class="">
    <p>Nombre: {{$product->productName}}</p>
    <p>Descripcion: {{$product->productDescription}}</p>
    <p>Precio: {{$product->price}}</p>
    <p>Stock: {{$product->stock}}</p>
    {{-- <a href="/product/{{$product->id}}">Ver mas</a> --}}
    {{-- <a href="/product/edit/{{$product->id}}">Editar</a> --}}
  </article>
@empty
  <p>No hay productos</p>
@endforelse

@endsection
