<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Digital Prime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <script defer type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

  </head>
  <body>
    @include("partials.header")

  <div class="steps-form">
      <div class="steps-row setup-panel">
        <div class="steps-step">
          <a type="button" class="btn btn-warning btn-circle">1</a>
          <h6>View Cart</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">2</a>
          <h6>Checkout</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">3</a>
          <h6>Pay</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">4</a>
          <h6>In Delivery</h6>
        </div>
        <div class="steps-step">
          <a type="button" class="btn btn-secondary btn-circle" disabled="disabled">5</a>
          <h6>Review</h6>
        </div>
      </div>
    </div>


    <h2 class="mx-5">My Cart</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col px-5">
        @if (!empty($cart))
          @each('partials.cart_product',$cart,'product' )
        @endif
        </div>
        <div class="col px-5">
            <h2>Cart</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Product</th>
                  <th scope="col">Price per Unit</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $total = 0;
              $totalQuantity = 0;
              $i = 0;
              use App\Models\Product;
              use App\Models\CartProduct;
              if(!empty($cart)){
                foreach ($cart as $item) {
                  $prod = Product::find($item->product_id);
                  $quantity = CartProduct::where('buyer_id',Auth::user()->id)->where('product_id', '=', $item->product_id)->pluck('quantity')->first();
                  $total = $total+($prod->price*$quantity);
                  $totalQuantity = $totalQuantity+$quantity;
                  $i++;
                  
              ?>
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$prod->name}}</td>
                <td>??? {{$prod->price}}</td>
                <td>{{$quantity}}</td>
                <td>?????{{$prod->price*$quantity}}</td>
              </tr><?php
              }}
              ?>
              <tr>
                <th scope="row">Total</th>
                <td> </td>
                <td></td>
                <td>{{$totalQuantity}} item(s)</td>
                <td><b>??? {{$total}}</b></td>
              </tr>

              </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button onclick="location.href='{{ url('/checkout') }}'" class="btn btn-primary me-md-2 btn-lg mt-2" type="button">Next</button>
            </div>
        </div>
    </div>

    @include("partials.footer")



  </body>
</html>
