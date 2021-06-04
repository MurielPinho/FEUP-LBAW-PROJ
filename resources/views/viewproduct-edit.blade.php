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
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
        <div class="col">
          <div class="col bg-light p-2 border">
            <img src="../assets/pc1.jpg" id="output" class="img-fluid rounded mx-auto d-block" alt="...">
            <div class="mb-3">
                <form>
                    <input type="file" class="form-control" aria-label="file example"  onchange="loadFile(event)" required>
                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                        Upload Image
                    </button>

                </form>

              <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="col bg-light p-2 border">
            <h3>Name</h3>
            <div class="input-group mb-3">
              <input type="text" class="form-control" value="{{$product->name}}" name="name" aria-describedby="button-addon2">
            </div>
          </div>
          <div class="col bg-light p-2 border">
            <h3>Category {{$product->category->name}}</h3>
            <div class="form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example" >
                 <option <?=$product->category->name == 'Smartphone' ? ' selected="selected"' : '';?> >Smartphone</option>
                 <option <?=$product->category->name == 'Mouse' ? ' selected="selected"' : '';?> >Mouse</option>
                 <option <?=$product->category->name == 'Notebook' ? ' selected="selected"' : '';?> >Notebook</option>
                 <option <?=$product->category->name == 'Wearable' ? ' selected="selected"' : '';?> >Wearable</option>
                 <option <?=$product->category->name == 'Headset' ? ' selected="selected"' : '';?> >Headset</option>
                 <option <?=$product->category->name == 'Graphics Card' ? ' selected="selected"' : '';?> >Graphics Card</option>
                 <option <?=$product->category->name == 'Storage' ? ' selected="selected"' : '';?> >Storage</option>
                 <option <?=$product->category->name == 'Keyboard' ? ' selected="selected"' : '';?> >Keyboard</option>
                 <option <?=$product->category->name == 'Motherboard' ? ' selected="selected"' : '';?> >Motherboard</option>
                 <option <?=$product->category->name == 'RAM' ? ' selected="selected"' : '';?> >RAM</option>


              </select>
              <label for="floatingSelect">Category</label>
            </div>
          </div>
          <div class="col bg-light p-2 border">
            <h3>Description</h3>
            <div class="input-group mb-3">
              <input type="text" class="form-control" value="{{$product->description}}" aria-describedby="button-addon2" name="description">
            </div>
          </div>
          <div class="col bg-light p-2 border">
            <h3>Price</h3>
            <div class="input-group mb-3">
              <input name="price" type="text" class="form-control"  value="{{$product->price}}" aria-describedby="button-addon2">
            </div>
          </div>

            <button class="btn btn-success mt-3 " onclick="updateProduct({{$product->id}})">Save</button>

        </div>

    </div>
    <h3> </h3>

    @include("partials.footer")

  </body>

  <script defer>

    function handler(){
          console.log("pedido recebido")
      }


    function updateProduct(id) {
       console.log(id)
       let description = document.querySelector('input[name=description]').value
       let name = document.querySelector('input[name=name]').value
       let price = document.querySelector('input[name=price]').value
       let category = document.querySelector('select').selectedIndex + 1;
       let image = document.querySelector('select').selectedIndex + 1;
       console.log( document.querySelector('input[type=file]'))
       sendAjaxRequest('put', '/product/'+id , {description, name, price,category}, handler )
    }

    var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
}

  </script>




  </html>


