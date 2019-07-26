@extends('layouts.app')
@section('pageTitle', "ERDI")
@section('content')


<!-- CARROUSEL IMAGENES -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" "carousel CSS" style="background-image:url('images/Natural Food.jpg'); background-size:cover; background-position:center">
        <img class="d-block w-100" id="img-carousel" src="" alt="">
      </div>
      <div class="carousel-item" style="background-image:url('images/nuts 1.jpg'); background-size:cover;">
        <img class="d-block w-100" id="img-carousel" src="" alt="">
      </div>
      <div class="carousel-item" style="background-image:url('images/berries.jpg'); background-size:cover; background-position:center">
        <img class="d-block w-100" id="img-carousel" src="" alt="">
      </div>
      <div class="carousel-item" style="background-image:url('images/miel-natural.jpg'); background-size:cover; background-position:center">
        <img class="d-block w-100" id="img-carousel" src="" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>

<!-- CAROUSEL/CUADRO CATEGORIAS -->

<div class="categorias-container">

  <div class="categoria">
    <a class="circulito" href="#"><img class="img-categoria" src="images/celiaco icono2.png" alt=""></a>
  </div>

  <div class="categoria">
    <a class="circulito" href="#"><img class="img-categoria-vegan" src="images/vegan icono.png" alt=""></a>
  </div>

  <div class="categoria">
    <a class="circulito" href="#"><img class="img-categoria-vegetariano" src="images/cruelty free icono.svg" alt=""></a>
  </div>

  <div class="categoria">
    <a class="circulito" href="#"><img class="img-categoria-organico" src="images/organico icono.svg" alt=""></a>
  </div>

</div>

<div class="container-productos-busqueda">

  <!-- FILTROS -->

  <div class="busqueda">
  <h3>Búsqueda por filtros</h3>
    <div class="dietFilter">
      @foreach ($diets as $diet)
        <input type="checkbox" name="diets[]" value="{{$diet->id}}"><p>{{$diet->dietType}}</p>
      @endforeach
    </div>
    <div class="attributeFilter">
      @foreach ($attributes as $attribute)
        <input type="checkbox" name="attributes[]" value="{{$attribute->id}}"><p>{{$attribute->attributeName}}</p>
      @endforeach
    </div>
  </div>

  <!-- PRODUCTOS -->

  <div class="container-productos">
@foreach ($products as $product)
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
@endforeach

  </div>

</div>

@endsection
