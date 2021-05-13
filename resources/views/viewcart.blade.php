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
      
  <div class="steps-form">
      <div class="steps-row setup-panel">
        <div class="steps-step">
          <a type="button" class="btn btn-warning btn-circle">1</a>
          <p>View Cart</p>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">2</a>
          <p>Checkout</p>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">3</a>
          <p>Pay</p>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">4</a>
          <p>In Delivery</p>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">5</a>
          <p>Review</p>
          </div>
        </div>
    </div>


    <h2>My Cart</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card mb-3" style="max-width: 750px;">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="./assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body text-center">
                  <h5 class="card-title">Product 1</h5>
                  <h6 class="card-title">Category</h6>
                  <h6 class="card-text">Price</h6>
                  <p class="card-text">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                        </select>
                        <label for="floatingSelect">Quantity</label>
                      </div>
                      <button class="btn btn-primary" type="button">Add More</button>
                      <button class="btn btn-primary" type="button">Remove</button>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 750px;">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="./assets/pc2.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title">Product 2</h5>
                  <h6 class="card-title">Category</h6>
                  <h6 class="card-text">Price</h6>
                  <p class="card-text">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                        </select>
                        <label for="floatingSelect">Quantity</label>
                      </div>
                      <button class="btn btn-primary" type="button">Add More</button>
                      <button class="btn btn-primary" type="button">Remove</button>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="max-width: 750px;">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="./assets/pc1.jpg" alt="..." class="img-fluid rounded mx-auto d-block">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title">Product 3</h5>
                  <h6 class="card-title">Category</h6>
                  <p class="card-text">Price</p>
                  <p class="card-text"><small class="text-muted">Quantity</small></p>
                  <p class="card-text">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary" type="button">Add More</button>
                      <button class="btn btn-primary" type="button">Remove</button>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col">
            <h2>Cart</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>Price</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>Price</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>Price</td>
                </tr>
                <tr>
                  <th scope="row">Total</th>
                  <td> </td>
                  <td>Price</td>
                </tr>
              </tbody>
            </table>
            <a href="checkout" type="button" class="btn btn-primary">Checkout Cart</a>
        </div>
    </div>

    @include("partials.footer")



  </body>
</html>
