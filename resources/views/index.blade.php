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
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/pcimage3.jpg" class="d-block w-100" alt="..." height = "500px">
        </div>
        <div class="carousel-item">
          <img src="./assets/pcimage.jpg" class="d-block w-100" alt="..." height = "500px">
        </div>
        <div class="carousel-item">
          <img src="./assets/pcimage2.jpeg" class="d-block w-100" alt="..." height = "500px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>






    <ul class="nav nav-tabs mx-auto" id="myTab">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Top Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Latest Promotions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">New Arrivals</a>
      </li>
    </ul>




    <div class="row row-cols-1 row-cols-md-3 g-3 mt-2 w-90 mx-auto">
       @if (!empty($products))
          @each('partials.product_card_home',$products->slice(0, 3),'product' )
        @endif
    </div>

    <nav aria-label="Page navigation example" class="mt-3 mr-0">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

    


    @include("partials.footer")

  </body>
</html>
