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
          <h6>View Cart</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-success btn-circle" disabled="disabled">2</a>
          <h6>Checkout</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-success btn-circle" disabled="disabled">3</a>
          <h6>Pay</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-success btn-circle" disabled="disabled">4</a>
          <h6>In Delivery</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-warning btn-circle" disabled="disabled">5</a>
          <h6>Review</h6>
        </div>
      </div>
    </div>
      <br>
      <br>
      <br>
      <div class="text-center  p-3">
      <h2>We hope your order arrived safely!</h2>
      <br>
      <br>
      <br>
      <h4>You have 30 days to return your product(s) if needed.</h4>
      <br>
      <h4>Thanks for buying with us!</h4>
      <br>
      <br>
      <button onclick="location.href='{{ url('/') }}'" class="btn btn-primary me-md-2 btn-lg mt-2" type="button">Return to Main Page</button>
    </div>
      

    @include("partials.footer")

  </body>
</html>
