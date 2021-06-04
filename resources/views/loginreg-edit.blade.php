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



    <h2>Edit Account</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <h3>User Information</h3>
            <form class="px-4 py-3">
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username" value="{{$buyer->name}}">
                </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
                  <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email"  value="{{$buyer->email}}">
                </div>
            </form>
            <h3>Change Password</h3>
            <form class="px-4 py-3">
              <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Previous Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>
              <div class="mb-3">
                  <label for="exampleDropdownFormPassword1" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
              </form>
        </div>
        <div class="col">
            <h3>Address</h3>
            <form method="POST" action="editaddress" class="px-4 py-3">
              {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Localidade</label>
                  <input type="text" name="city" class="form-control" id="exampleDropdownFormEmail1" placeholder="Localidade">
                </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Morada</label>
                  <input type="text" name="address" class="form-control" id="exampleDropdownFormEmail1" placeholder="Morada">
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Código Postal</label>
                      <input type="text" name="postalcard" class="form-control" id="exampleDropdownFormEmail1" placeholder="XXXX-XXX">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Andar</label>
                      <input type="text" name="door" class="form-control" id="exampleDropdownFormEmail1" placeholder="Andar">
                    </div>
                  </div>
                </div>
            </form>
            <h3>Credit Information</h3>
            <form method="POST" action="editcinfo" class="px-4 py-3">
              {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Credit Card</label>
                  <input type="text" name="cardNumber" class="form-control" id="exampleDropdownFormEmail1" placeholder="XXXXXXXXXXXXX">
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">CVV</label>
                      <input type="text" name="securityCode"  class="form-control" id="exampleDropdownFormEmail1" placeholder="YYY">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail1" class="form-label">Expiration Date</label>
                      <input type="text" name="expirationDate"  class="form-control" id="exampleDropdownFormEmail1" placeholder="ZZ-ZZ-ZZZZ">
                    </div>
                  </div>
                </div>
              </form>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-danger me-md-2 btn-lg" type="button" onclick="deleteuser({{Auth::user()->id}})" >Delete Account</button>
      <button class="btn btn-primary me-md-2 btn-lg" type="button" name="submit1" >Save Changes</button>
    </div>

    @include("partials.footer")


    <script defer>

        function handler(){
            window.location.href = "/"
        }

        function deleteuser(id){
            sendAjaxRequest('delete', '/buyers/' + id, null, handler )
        }

    </script>


  </body>
</html>
