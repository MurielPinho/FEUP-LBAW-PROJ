<div class="card mb-3" style="max-width: 750px;">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="./assets/products/{{$product->product_id}}.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body text-center">
                <?php
                use App\Models\Product;
                use App\Models\Category;
                use App\Models\CartProduct;
                $prod = Product::find($product->product_id);
                $category = Category::find($prod->category_id);
                $quantity = CartProduct::where('buyer_id',Auth::user()->id)->where('product_id', '=', $product->product_id)->pluck('quantity');
                ?>
                  <h5 class="card-title" id="teste">{{$prod->name}}</h5>
                  <h6 class="card-title">{{$category->name}}</h6>
                  <h6 class="card-text">€ {{$prod->price}}</h6>
                  <p class="card-text">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect{{$product->product_id}}" aria-label="Floating label select example" onchange="update({{$product->product_id}},{{Auth::user()->id}})">
                          @for ($i = 1; $i <= 10; $i++)
                          <option value="{{ $i }}" @if($product->quantity == $i) echo selected @endif>{{ $i }}</option>
                          @endfor

                        </select>
                        <label for="floatingSelect">Quantity</label>
                      </div>
                      <button class="btn btn-primary" type="button" onclick="increase({{$product->product_id}},{{Auth::user()->id}})">Add More</button>
                      <button class="btn btn-primary" type="button" onclick="decrease({{$product->product_id}},{{Auth::user()->id}})">Remove</button>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <script>
            function handler(){
               window.location.reload()
            }

            function increase(product_id,buyer_id){
                sendAjaxRequest('post', '/increase' , {product_id, buyer_id}, handler );
            }

            function decrease(product_id,buyer_id){
                sendAjaxRequest('post', '/decrease' , {product_id, buyer_id}, handler );
            }

            function update(product_id,buyer_id){
              var quantity = document.getElementById("floatingSelect"+product_id).value;
              
              sendAjaxRequest('post', '/update' , {product_id, buyer_id,quantity}, handler );
              
            }


          </script>

