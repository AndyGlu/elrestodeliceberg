@extends('layouts.app')
@section('pageTitle', "Perfil")
@section('content')
@php
  $user = auth()->user();
@endphp
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Usuario</title>
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <div class="container">
        <br>
        <h2>Mi usuario</h2><br  />
        <dl class="row">
          <dt class="col-sm-1">Nombre</dt>
          <dd class="col-sm-11">{{$user->name}}</dd>
          <br><br>

          <dt class="col-sm-1">Apellido</dt>
          <dd class="col-sm-11">{{$user->lastname}}</dd>
<br><br>

          <dt class="col-sm-1">Teléfono</dt>
          <dd class="col-sm-11">{{$user->phone}}</dd>
          <br><br>



        </dl>
      </div>
    </body>
  </html>
@endsection
