<div class="card mb-3" style="max-width: 1000px">
    <div class="row g-0">
      <div class="col-md-5">
        <a href="/products/{{$product->id}}"> <img src="./assets/products/{{$product->id}}.jpg" class="img-fluid rounded mx-auto d-block" alt="..."></a>
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <h6 class="card-title">{{$product->category->name}}</h6>
          <h6 class="card-text">{{$product->price}}$</h6>
          <p class="card-text">
            <div class="d-grid gap-2 col-6 mx-auto">
              @if (Auth::user())
              <button class="btn btn-primary" type="button" onclick="addCart({{$product->id}},{{Auth::user()->id}})">Add to Cart</button>
              @endif
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>


