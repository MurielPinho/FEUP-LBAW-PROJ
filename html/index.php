<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Digital Prime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="./styles/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <img src="./assets/iconpc.png" alt="..." width = "50" height = "50" class="mx-2">
        <a class="navbar-brand" href="index.php" >Digital Prime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./backoffice">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginreg.html">Login | Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewcart.html">Shopping Cart</a>
            </li>
                  
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <a class="btn btn-outline-success" href="./productsearch.html">Search</a>
          </form>
        </div>
      </div>
    </nav>
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






    <ul class="nav nav-tabs mx-auto">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Latest Promotions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Top Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">New Arrivals</a>
      </li>
    </ul>




    <div class="row row-cols-1 row-cols-md-3 g-3 mt-2 w-90 mx-auto">
      <div class="col">
        <a href="viewproduct.html">
          <div class="card h-100">
            <img src="./assets/pc1.jpg" class="card-img-top" alt="..." height="300">
            <div class="card-body">
              <h5 class="card-title">Computer 1</h5>
              <p class="card-text">This is a very good computer with lots of funcionalities.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">399.99€</small>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="viewproduct.html">
          <div class="card h-90">
            <img src="./assets/pc2.jpg" class="card-img-top" alt="..." height="300">
            <div class="card-body">
              <h5 class="card-title">Computer 2</h5>
              <p class="card-text">This is a very good computer with even more funcionalities.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">599.99€</small>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="viewproduct.html">
          <div class="card h-100">
            <img src="./assets/pc1.jpg" class="card-img-top" alt="..." height="300">
            <div class="card-body">
              <h5 class="card-title">Computer 1 2.1</h5>
              <p class="card-text">This is a very good computer with some funcionalities.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">399.99€</small>
            </div>
          </div>
        </a>
      </div>
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


  <footer class="navbar navbar-light bg-light \">
    <div class="container-fluid">
      <a class="navbar-brand mx-auto" href="contactsfaqs.html">Contacts | FAQ's</a>
    </div>
  </footer>



  </body>
</html>
