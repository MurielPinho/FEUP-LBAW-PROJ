<div class="card mb-3" style="max-width: 750px;">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="../assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body text-center">
                <?php
                use App\Models\Product;
                use App\Models\Category;
                $prod = Product::find($product->product_id);
                $category = Category::find($prod->category_id);
                ?>
                  <h5 class="card-title">{{$prod->name}}</h5>
                  <h6 class="card-title">{{$category->name}}</h6>
                  <h6 class="card-text">€ {{$prod->price}}</h6>
                  <p class="card-text">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          @for ($i = 1; $i <= 5; $i++)
                          <option value="{{ $i }}" @if($product->quantity == $i) echo selected @endif>{{ $i }}</option>
                          @endfor               
                          
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

