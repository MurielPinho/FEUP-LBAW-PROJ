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

    <@include("partials.footer")


  </body>
</html>
