<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Digital Prime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <img src="./assets/iconpc.png" alt="..." width = "50" height = "50" class="mx-2">
        <a class="navbar-brand" href="index.php">Digital Prime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="backoffice">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginreg">Login | Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewcart">Shopping Cart</a>
            </li>
          </ul>
          <form class="d-flex" action="productsearch">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>



    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">

          <div class="col bg-light p-3 border">
            <h2>Contacts</h2>
            <p>Phone number: xxx xxx xxx</p>
            <p>Address: Rua Dr. Algo Nr. X</p>
            <p>Email: digitalprime@gmail.com</p>
          </div>
          <h2> </h2>
          <div class="col bg-light p-3 border">
            <h2>FAQ's</h2>
            <h4> </h4>
            <h5>Who are we?</h5>
            <p>We are a store.</p>
            <h4> </h4>
            <h5>When do we deliver products?</h5>
            <p>Every day.</p>
            <h4> </h4>
            <h5>How to Pay?</h5>
            <p>Credit Card, MBWay, Paypal.</p>
          </div>

        </div>
        <div class="col">
          <div class="col bg-light p-3 border">
            <h2>Map</h2>
            <img src="./assets/map.png" alt="..." width = "500" height = "500">
          </div>
        </div>
    </div>

    <footer class="navbar navbar-light bg-light fixed-bottom">
      <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="contactsfaqs">Contacts | FAQ's</a>
      </div>
    </footer>


  </body>
</html>