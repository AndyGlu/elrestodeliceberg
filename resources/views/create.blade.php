<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Create A Product</h2><br  />
      <form method="post">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">description: </label>
              <input type="text" class="form-control" name="productDescription">
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
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>
      @dd($_POST);
    </div>
  </body>
</html>
