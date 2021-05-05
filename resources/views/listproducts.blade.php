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



    <div class="container border rounded bg-light mx-auto m-3 p-3">
        <div class="row mb-3">
            <div class="col">
                <h5>Name</h5>
                <input class="input-sm">
            </div>
            <div class="col">
                <h5>Price</h5>
                <input>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <h5>Category</h5>
                <input>
            </div>
            <div class="col">
                <h5>Quantity</h5>
                <input>
            </div>
        </div>
        
        <button class="btn btn-primary mt-3"><img src="https://pics.freeicons.io/uploads/icons/png/18860108731537184102-512.png" width=20>  Filter</button>
    </div>
      
    <div class="container border rounded bg-light mx-auto m-3 p-3">
        
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead> 
            
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="./assets/pc1.jpg" width=100></td>
                    <td>Macbook air 16G 256GB</td>
                    <td>20</td>
                    <td> <button onclick="location.href='viewproduct-edit'" class="btn btn-primary me-md-2" type="button">Edit</button> </td>
                </tr>
                
                <tr>
                    <th scope="row">2</th>
                    <td><img src="./assets/pc1.jpg" width=100></td>
                    <td>Macbook air 16G 256GB</td>
                    <td>50</td>
                    <td> <button onclick="location.href='viewproduct-edit'" class="btn btn-primary me-md-2" type="button">Edit</button> </td>
                </tr>
                
                <tr>
                    <th scope="row">3</th>
                    <td><img src="./assets/pc1.jpg" width=100></td>
                    <td>Macbook air 16G 256GB</td>
                    <td>10</td>
                    <td> <button onclick="location.href='viewproduct-edit'" class="btn btn-primary me-md-2" type="button">Edit</button> </td>
                </tr>
                
                <tr>
                    <th scope="row">4</th>
                    <td><img src="./assets/pc1.jpg" width=100></td>
                    <td>Macbook air 16G 256GB</td>
                    <td>30</td>
                    <td> <button onclick="location.href='viewproduct-edit'" class="btn btn-primary me-md-2" type="button">Edit</button> </td>
                </tr>
            
            </tbody>
        </table>
    
        <button onclick="location.href='viewproduct-create'" class="btn mb-5 btn-primary">New Product</button>  
      
      </div>
    
      
      
      <footer class="navbar navbar-light bg-light \ fixed-bottom">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="contactsfaqs">Contacts | FAQ's</a>
        </div>
      </footer>


  </body>
</html>
