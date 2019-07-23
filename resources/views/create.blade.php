<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <br>
      <h2>Cargar un producto</h2><br  />
      <form method="post">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Descripción: </label>
              <input type="text" class="form-control" name="productDescription" style="height:15em">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="stock">Stock:</label>
                <input type="text" class="form-control" name="stock">
              </div>
            </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Precio:</label>
              <input type="text" class="form-control" name="price">
            </div>
          </div>

          <div class="cargaArchivoDiv">
          <form method="post" enctype="multipart/form-data" class="cargaArchivoForm">
    <input type="file" name="files[]" multiple />
    <input type="submit" value="Cargar" name="submit" />
  </form>
  <br>
</div>
</div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
        <br>    <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar producto</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>
