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
              <a class="nav-link" href="backoffice/index">Settings</a>
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


    <h2>Edit Product</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="col bg-light p-3 border">
            <img src="./assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
            <div class="mb-3">
              <input type="file" class="form-control" aria-label="file example" required>
              <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="col bg-light p-3 border">
            <h2>Name</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Computer 1 2.1" aria-label="Computer 1 2.1" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Edit Name</button>
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
              <input type="text" class="form-control" placeholder="This is a very good computer with some funcionalities." aria-label="This is a very good computer with some funcionalities." aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Edit Description</button>
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Price</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="399.99€" aria-label="399.99€" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Edit Price</button>
            </div>
          </div>
        </div>
    </div>
    <h2> </h2>

    <footer class="navbar navbar-light bg-light fixed-bottom">
      <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="contactsfaqs">Contacts | FAQ's</a>
      </div>
    </footer>

  </body>
</html>
