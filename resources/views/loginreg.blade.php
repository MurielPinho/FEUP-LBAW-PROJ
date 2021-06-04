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


    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <a class="nav-link" href="#">Login</a>
            <form class="px-4 py-3" method="POST" action="login">
               {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
                  <input type="text" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email">
                  <div id="emailHelp" class="form-text">Insert the email You are Registered with.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
              </form>
        </div>
        <div class="col" >
            <a class="nav-link" href="#">Register</a>
            <form class="px-4 py-3 mb-5" method="POST" action="register">
              {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleDropdownFormUser1" class="form-label">Email*</label>
                  <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">User*</label>
                    <input name="name" type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
                  </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormText" class="form-label">Phone number*</label>
                  <input type="Phone" name="phonenumber" class="form-control" id="exampleDropdownFormText" placeholder="9999-9999">
                </div>
                <div class="mb-3">
                  <label for="exampleDropdownFormPassword1" class="form-label">Password*</label>
                  <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">Confirm Password*</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleDropdownFormPassword1" placeholder="Confirm pessword">

                    <br>* Required field
                  </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
              </form>
        </div>
    </div>

    @include("partials.footer")


  </body>
</html>
