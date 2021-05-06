<div class="card mb-3" style="max-width: 1000px;">
    <div class="row g-0">
      <div class="col-md-5">
        <img src="./assets/pc2.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <h6 class="card-title">{{$product->category->name}}</h6>
          <h6 class="card-text">{{$product->price}}$</h6>
          <p class="card-text">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary" type="button">Add to Cart</button>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>
