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
            <a href="{{ url('/addcart/' . $product->id) }}" type="button" class="btn btn-primary">Add to Cart</a>
            <a type="button" class="btn btn-primary">Add to Wishlist</a>
              
            </div>
          </div>
          <h2> </h2>
          <div class="col bg-light p-3 border">
            <h2>Reviews</h2>
            @foreach ($product->review as $r)
            <div class="card mb-3" style="max-width: 750px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/user1.jpg" class="img-fluid rounded float-start h-100" alt="..." width = "150">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <h3 class="card-title">{{$r->buyer->name}}</h3>
                      <h4 class="card-text">{{$r->rating}}/5 Stars</h4>
                      <p class="card-text">{{$r->message}}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>
    </div>
    <h2> </h2>

    <div class="col bg-light p-3 border">
      <h2>Q&A</h2>
      @foreach ($product->question as $q )
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-1">
            <img src="../assets/user1.jpg" class="img-fluid rounded float-start" alt="..." width = "100" height = "100">
          </div>
          <div class="col-md-11">
            <div class="card-body">
              <h3 class="card-title">{{$q->buyer->name}}</h3>
              <p class="card-text">{{$q->message}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div style="height: 10vh"></div>
    </div>

    <h2> </h2>
    <h2> </h2>
    <h2> </h2>

    @include("partials.footer")


  </body>
</html>
