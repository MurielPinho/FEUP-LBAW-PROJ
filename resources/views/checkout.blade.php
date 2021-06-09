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
          <a type="button" class="btn btn-warning btn-circle" disabled="disabled">2</a>
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
    
        <div class="col ">
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
              use App\Models\Buyer;
              use App\Models\Address;
              $user = Buyer::where('id',Auth::user()->id)->pluck('name')->first();
              $addr = Address::where('id',Auth::user()->id)->get()->first();
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
                <td>€ {{$prod->price}}</td>
                <td>{{$quantity}}</td>
                <td>€ {{$prod->price*$quantity}}</td>
              </tr><?php
              }}
              ?>
              <tr>
                <th scope="row">Total</th>
                <td> </td>
                <td></td>
                <td>{{$totalQuantity}} item(s)</td>
                <td><b>€ {{$total}}</b></td>
              </tr>

              </tbody>
            </table>
        </div>
    

    <h2 class="mx-5">Payment and Shipping Address</h2>
    <div class="col bg-light p-3 border">
      <h3>Payment</h3>
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
      <h3>Shipping Address</h3> 
      <h3> </h3>
      <h6>{{$user}},</h6>
      <h6>{{$addr->address}}, Nº {{$addr->door}},</h6>
      <h6>{{$addr->postalcard}}, {{$addr->city}}</h6>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Change</button>
      </div>

    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button onclick="location.href='{{ url('/payment') }}'" class="btn btn-primary me-md-2 btn-lg mt-2" type="button">Next</button>
    </div>


    @include("partials.footer")

  </body>
</html>
