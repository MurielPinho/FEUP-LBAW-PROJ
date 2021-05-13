<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Digital Prime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    @include("partials.header")


    <h2> </h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="col bg-light p-3 border">
            <img src="../assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="col bg-light p-3 border">
            <h2>{{$product->name}}</h2>
            <h4>Category</h4>
            <p>{{$product->description}}</p>
            <h3>{{$product->price}}$</h3>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" type="button">Add to Cart</button>
              <button class="btn btn-primary" type="button">Add to Wishlist</button>
            </div>
          </div>
          <h2> </h2>
          <div class="col bg-light p-3 border">
            <h2>Reviews</h2>
            <div class="card mb-3" style="max-width: 750px;">
              <div class="row g-0">
                <div class="col-md-2">
                  <img src="../assets/user1.jpg" class="img-fluid rounded float-start h-100" alt="..." width = "150">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <h3 class="card-title">User 1</h3>
                    <h4 class="card-text">5/5 Stars</h4>
                    <p class="card-text">I really liked the Computer! Very good!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <h2> </h2>

    <div class="col bg-light p-3 border">
      <h2>Q&A</h2>
      <h3> </h3>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-1">
            <img src="../assets/user1.jpg" class="img-fluid rounded float-start" alt="..." width = "100" height = "100">
          </div>
          <div class="col-md-11">
            <div class="card-body">
              <h3 class="card-title">User 1</h3>
              <p class="card-text">Is this a Good Computer?</p>
            </div>
          </div>
        </div>
      </div>
      <h3> </h3>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-1">
            <img src="../assets/admin.jpg" alt="..." class="img-fluid rounded float-start" width = "100" height = "100">
          </div>
          <div class="col-md-11">
            <div class="card-body">
              <h3 class="card-title">Admin</h3>
              <p class="card-text">Of course! It's one of the best computers!</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <h2> </h2>
    <h2> </h2>
    <h2> </h2>

    @include("partials.footer")


  </body>
</html>
