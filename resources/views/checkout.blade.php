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
          <a type="button" class="btn btn-success btn-circle">1</a>
          <p>View Cart</p>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-warning btn-circle" disabled="disabled">2</a>
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

    <h2>Payment and Transport</h2>
    <div class="col bg-light p-3 border">
      <h2>Payment</h2>
      <h3> </h3>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Credit Card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          MB-Way
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          PayPal
        </label>
      </div>

    </div>
    <div class="col bg-light p-3 border">
      <h2>Transport</h2> 
      <h3> </h3>
      <h5>User 1</h5>
      <h5>Rua Dr. Algo Nr. X</h5>
      <h5>XXXX-XXX  1º Esq</h5>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Change</button>
      </div>

    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button onclick="location.href='index.php'" class="btn btn-primary me-md-2 btn-lg mt-2" type="button">Finish</button>
    </div>


    @include("partials.footer")

  </body>
</html>
