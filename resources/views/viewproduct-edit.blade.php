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


    <h2>Edit Product</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="col bg-light p-3 border">
            <img src="../assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
            <div class="mb-3">
              <input type="file" class="form-control" aria-label="file example" required>
              <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="col bg-light p-3 border">
            <h2>Name</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" value={{$product->name}} name="name" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Edit Name</button>
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Category</h2>
            <div class="form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Computer</option>
                <option >CD</option>
                <option >Phone</option>
                <option >Headphones</option>
              </select>
              <label for="floatingSelect">Category</label>
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Description</h2>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="This is a very good computer with some funcionalities." aria-label="This is a very good computer with some funcionalities." aria-describedby="button-addon2" name="description">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Edit Description</button>
            </div>
          </div>
          <div class="col bg-light p-3 border">
            <h2>Price</h2>
            <div class="input-group mb-3">
              <input name="price" type="text" class="form-control" placeholder="399.99€" aria-label="399.99€" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="btnteste2" >Edit Price</button>
            </div>
          </div>
        </div>
    </div>
    <h2> </h2>

    @include("partials.footer")

  </body>

  <script defer>

function encodeForAjax(data) {
  if (data == null) return null;
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}

function sendAjaxRequest(method, url, data, handler) {
  let request = new XMLHttpRequest();

  request.open(method, url, true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.addEventListener('load', handler);
  request.send(encodeForAjax(data));
}

      let teste = document.getElementById('btnteste2');
      teste.addEventListener('click', function(e) {
        let name = document.querySelector('input[name=name]').value;
        let description = document.querySelector('input[name=description]').value;
        let price = document.querySelector('input[name=price]').value;
        let category = document.querySelector('select[id=floatingSelect]').value;
        let id = window.location.href.split('/');
        id = id[id.length-1];



          if (name != '')
          sendAjaxRequest('put', '/product-edit/' + id, {name,description,price,category});

      })






  </script>


  </html>


