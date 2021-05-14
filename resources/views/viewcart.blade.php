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
        @if (!empty($cart)) 
          @each('partials.cart_product',$cart,'product' )
        @endif
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
              <?php 
              $total = 0;
              $i = 0;
              use App\Models\Product;
              if(!empty($cart)){
                foreach ($cart as $item) {
                  $prod = Product::find($item->product_id);
                  $total = $total+$prod->price;
                  $i++;
              ?>
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$prod->name}}</td>
                <td>€ {{$prod->price}}</td>
              </tr><?php 
              }}
              ?>
              <tr>
                <th scope="row">Total</th>
                <td> </td>
                <td>€ {{$total}}</td>
              </tr>
               
              </tbody>
            </table>
            <a href="checkout" type="button" class="btn btn-primary">Checkout Cart</a>
        </div>
    </div>

    @include("partials.footer")



  </body>
</html>
