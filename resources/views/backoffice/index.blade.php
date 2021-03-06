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
        <a class="navbar-brand" href="{{ url('/') }}">Digital Prime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          </ul>
        </div>
      </div>
    </nav>


    <div class="text-center h-75">
      <h2>Management</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card-body">
              <img src="../assets/iconsettings.png" class="img-fluid rounded mx-auto d-block text-center" alt="..." width="200" height="200">
              <div class="card-body">
                <h5>
                  <a class="nav-link" href="/backoffice/settings">Store Settings</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card-body">
              <img src="../assets/iconprofile.png" class="img-fluid rounded mx-auto d-block text-center" alt="..." width="200" height="200">
              <div class="card-body">
                <h5>
                  <a class="nav-link" href="/backoffice/users">Manage Users</a>
                </h5>
              </div>
            </div>
          </div>
      </div>

      <h2>Products</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card-body">
              <img src="../assets/iconaddproduct.png" class="img-fluid rounded mx-auto d-block text-center" alt="..." width="200" height="300">
              <div class="card-body">
                <h5>
                  <a class="nav-link" href="/newproduct">New Product</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card-body">
              <img src="../assets/iconviewall.png" class="img-fluid rounded mx-auto d-block text-center" alt="..." width="200" height="200">
              <div class="card-body">
                <h5>
                  <a class="nav-link" href="/backoffice/products">View All Products</a>
                </h5>
              </div>
            </div>
          </div>
      </div>
    </div>

    <footer class="navbar navbar-light bg-light \ fixed-bottom">
      <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="../contactsfaqs">Contacts | FAQ's</a>
      </div>
    </footer>


  </body>
</html>
