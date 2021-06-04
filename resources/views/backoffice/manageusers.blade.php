<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Digital Prime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

  </head>
  <body>
    @include("partials.header")

    <div class="container border rounded bg-light mx-auto m-3 p-3">
        <div class="row mb-3">
            <div class="col">
                <h5>Name</h5>
                <input class="input-sm">
            </div>
            <div class="col">
                <h5>Email</h5>
                <input>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5>Admin</h5>
                <input>
            </div>
        </div>

        <button id="testedeclick" class="btn btn-primary mt-3"><img src="https://pics.freeicons.io/uploads/icons/png/18860108731537184102-512.png" width=20>  Filter</button>
    </div>

    <div class="container border rounded bg-light mx-auto m-3 p-3">

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>

    @foreach ($buyers as $b )
    <tr id="buyer-row-{{$b->id}}">
        <th scope="row">{{$loop->index + 1}}</th>
        <td>{{$b->name}}</td>
        <td>{{$b->email}}</td>

        <td><input type="checkbox" onclick="toggleadmin({{$b->id}})" <?php echo ($b->isadmin ? 'checked' : '') ?>/></td>
        <td>
            <button onclick="location.href='../loginreg-edit.html'" class="btn btn-primary me-md-2" type="button">Edit</button>
            <button onclick="deleteUser({{$b->id}})" class="btn btn-danger me-md-2" type="button">Delete</button>
         </td>
    </tr>
     @endforeach

            </tbody>
        </table>

        <button onclick="location.href='../viewproduct-create.html'" class="btn mb-5 btn-primary">New User</button>

      </div>


      <footer class="navbar navbar-light bg-light fixed-bottom">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="../contactsfaqs.html">Contacts | FAQ's</a>
        </div>
      </footer>


  </body>

  <script defer>

      function handler(){
          console.log("pedido recebido")
      }

      function deleteHandler(){
        if (this.status != 200) console.log("error deleting")
        else {
            console.log("recieved" + this.responseText)
            let buyer = JSON.parse(this.responseText);
            console.log("id: " , buyer.id)
            let element = document.getElementById('buyer-row-'+buyer.id);
            element.remove();
        }


      }

    function toggleAdmin(id) {
       // console.log(id)
    sendAjaxRequest('post', '/toggleadmin' , {'id' : id }, handler )
    }

    function deleteUser(id) {
        console.log(id)
        sendAjaxRequest('delete', '/buyers/' + id, null, deleteHandler )
    }
</script>
</html>
