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



    <h2>Edit Account</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <h3>User Information</h3>
            <form class="px-4 py-3">
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
                </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
                  <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email">
                </div>
            </form>
            <h3>Change Password</h3>
            <form class="px-4 py-3">
              <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Previous Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>
              <div class="mb-3">
                  <label for="exampleDropdownFormPassword1" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
              </form>
        </div>
        <div class="col">
            <h3>Address</h3>
            <form method="POST" action="editaddress" class="px-4 py-3">
              {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Localidade</label>
                  <input type="text" name="city" value="<?php echo $city; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="Localidade">
                </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Morada</label>
                  <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="Morada">
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Código Postal</label>
                      <input type="text" name="postalcard" value="<?php echo $postalcard; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="XXXX-XXX">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Andar</label>
                      <input type="text" name="door" value="<?php echo $door; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="Andar">
                    </div>
                  </div>
                </div>
            </form>
            <h3>Credit Information</h3>
            <form method="POST" action="editcinfo" class="px-4 py-3">
              {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Credit Card</label>
                  <input type="text" name="cardNumber" value="<?php echo $cardNumber; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="XXXXXXXXXXXXX">
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">CVV</label>
                      <input type="text" name="securityCode" value="<?php echo $securityCode; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="YYY">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Expiration Date</label>
                      <input type="text" name="expirationDate" value="<?php echo $expirationDate; ?>" class="form-control" id="exampleDropdownFormEmail1" placeholder="ZZ-ZZ-ZZZZ">
                    </div>
                  </div>
                </div>
              </form>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary me-md-2 btn-lg" type="button" name="submit1" value="submit">>Save Changes</button>
    </div>
    
    <footer class="navbar navbar-light bg-light \ fixed-bottom">
      <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="contactsfaqs">Contacts | FAQ's</a>
      </div>
    </footer>


  </body>
</html>
