@extends('layouts.app')
@section('content')

<!-- CARROUSEL IMAGENES -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('images/alimentos-naturales1.jpeg'); background-size:cover; background-position:center">
        <img class="d-block w-100" id="img-carousel" src="" alt="">
      </div>
      <div class="carousel-item" style="background-image:url('images/bayas-naturales.jpg'); background-size:cover;">
        <img class="d-block w-100" id="img-carousel" src="" alt="">
      </div>
      <div class="carousel-item" style="background-image:url('images/caju-natural.jpg'); background-size:cover; background-position:center">
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
    <h3>Filtros</h3>

    <h5>Categoria</h5>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Atributo Alimenticio
      </label>
    </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <h5>Categoria</h5>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <h5>Categoria</h5>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
      Atributo Alimenticio
    </label>
  </div>

</div>


  <!-- PRODUCTOS -->

  <div class="container-productos">

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

    <div class="producto">
      <div class="img-producto-container">
        <img class="imgproducto" src="images/frutos-secos.jpg" alt="producto1">
      </div>
      <div class="info-producto-container">
        <h3>lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
        <button type="button" class="btn btn-info">Más Info</button>
      </div>
    </div>

  </div>

</div>

@endsection
