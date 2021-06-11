<div class="col">
        <a href="products/{{$product->id}}">
          <div class="card h-100">
            <img src="./assets/products/{{$product->id}}.jpg" class="card-img-top" alt="..." height="300">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <h6 class="card-text">{{$product->category->name}}</h6>
            </div>
            <div class="card-footer">
              <small class="text-muted">€ {{$product->price}}</small>
            </div>
          </div>
        </a>
      </div>