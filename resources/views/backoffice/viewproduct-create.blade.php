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
        <img src="../assets/iconpc.png" alt="..." width = "50" height = "50" class="mx-2">
        <a class="navbar-brand" href="{{ url('backoffice')}}">Digital Prime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('backoffice')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('backoffice')}}">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('loginreg')}}">Login | Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('viewcart')}}">Shopping Cart</a>
            </li>
          </ul>
          <form class="d-flex" action="productsearch">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <h2>Create Product</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="col bg-light p-1 border">
            <img src="../assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
            <div class="mt-3 mb-2 ml-2">
              <input type="file" class="form-control" aria-label="file example" required>
              <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="col bg-light p-3 border">
            <h2>Name</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Write Name" aria-label="Write Name" aria-describedby="button-addon2">
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Category</h2>
            <div class="form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Computer</option>
                <option value="1">CD</option>
                <option value="2">Phone</option>
                <option value="3">Headphones</option>
              </select>
              <label for="floatingSelect">Category</label>
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Description</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Write Description" aria-label="Write Description" aria-describedby="button-addon2">
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Price</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Write Price" aria-label="Write Price" aria-describedby="button-addon2">
            </div>
          </div>
        </div>
    </div>
    <h2> </h2>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary me-md-2" type="button">Save Changes</button>
    </div>
    <h2> </h2>


    <footer class="navbar navbar-light bg-light fixed-bottom">
      <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="{{ url('contactsfaqs')}}">Contacts | FAQ's</a>
      </div>
    </footer>


  </body>
</html>
