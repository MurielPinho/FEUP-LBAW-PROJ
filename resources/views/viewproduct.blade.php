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



    <div class="row row-cols-1 row-cols-md-2 g-0">
        <div class="col">
          <div class="col bg-light p-3 border">
            <img src="../assets/pc1.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="col bg-light p-3 border">
            <h2>{{$product->name}}</h2>
            <h4>Category</h4>
            <p>{{$product->description}}</p>
            <h3>{{$product->price}}$</h3>
            <div class="d-grid gap-2 d-md-block">

            @if (Auth::user())
      @if (Auth::user()->isadmin)
      <button  class="btn btn-primary" onclick="addCart({{$product->id}},{{Auth::user()->id}})">Add to Cart</button>
      <a  class="btn btn-primary" href="/product-edit/{{$product->id}}">Edit</a>
      @endif
  @endif

            </div>
          </div>
          <h2> </h2>
          <div class="col bg-light p-3 border overflow-scroll h-50  ">
            <h2>Reviews</h2>
            <div class="card mb-3" style="max-width: 750px;">
                <div class="row g-0">
                  <div class="col-md-10">
                    <div class="card-body">
                        <p class="text-danger" id="review-error" style="display: none">Text cannot be empty</p>
                        <p class="text-success" id="review-success" style="display: none">Success</p>
                    @if (Auth::user())
                    <p>Write your review</p>
                    <input type="text" id="review-input" class="form-control" placeholder="Type here..."/>
                    <input type="number" id="review-rating" class="mt-1" name="quantity" value="5" min="1" max="5">
                    </div>
                    <button class="btn btn-success align-right mb-3 mx-3" onclick="sendReview({{$product->id}},{{Auth::user()->id}})">Submit</button>
                    @endif
                  </div>
                </div>
              </div>
            @foreach ($product->review as $r)
            <div class="card mb-3" style="max-width: 750px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/user1.jpg" class="img-fluid rounded float-start h-100" alt="..." width = "150">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <h3 class="card-title">{{$r->buyer->name}}</h3>
                      <h4 class="card-text">{{$r->rating}}/5 Stars</h4>
                      <p class="card-text">{{$r->message}}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach


          </div>
        </div>
    </div>
    <h2> </h2>

    <div class="col bg-light p-3 border">
      <h2>Q&A</h2>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-10">
            <div class="card-body">
            <p class="text-danger" id="question-error" style="display: none">Text cannot be empty</p>
            <p class="text-success" id="question-success" style="display: none">Success</p>
            @if (Auth::user())
            <p>Ask a question :</p>
              <input type="text" id="question-input" class="form-control"  placeholder="Type here..."/>

            </div>

        </div>
          <div class="col-md-10">
            <div class="card-body">
                <button class="btn btn-success align-right" onclick="sendQuestion({{$product->id}},{{Auth::user()->id}})">Submit</button>
            </div>
            @endif
        </div>


      </div>
      @foreach ($product->question as $q )
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-1">
            <img src="../assets/user1.jpg" class="img-fluid rounded float-start" alt="..." width = "100" height = "100">
          </div>
          <div class="col-md-11">
            <div class="card-body">
              <h3 class="card-title">{{$q->buyer->name}}</h3>
              <p class="card-text">Q: {{$q->message}}</p>
            </div>
          </div>
        </div>
      </div>
      @if (Auth::user())
      @if (Auth::user()->isadmin)
      <div class="card mb-3 mx-5">
        <div class="row g-0">
          <div class="col-md-11">
            <div class="card-body">
                <p class="text-danger" id="answer-error-{{$q->id}}" style="display: none">Text cannot be empty</p>
                <p class="text-success" id="answer-success-{{$q->id}}" style="display: none">Success</p>
            <p>Answer this question :</p>
              <input type="text" id="answer-input-{{$q->id}}" class="form-control"  placeholder="Type here..."/>
            </div>
          </div>
          <div class="col-md-10">
            <div class="card-body">
                <button class="btn btn-success align-right" onclick="sendAnswer({{$q->id}},{{Auth::user()->id}})">Submit</button>
            </div>
        </div>
        </div>
      </div>
      @endif
  @endif
     @foreach ($q->answer as $a )
     <div class="card mb-3 mx-5">
        <div class="row g-0">
          <div class="col-md-1">
            <img src="../assets/user1.jpg" class="img-fluid rounded float-start" alt="..." width = "100" height = "100">
          </div>
          <div class="col-md-11">
            <div class="card-body">
              <h3 class="card-title">{{$a->buyer->name}}</h3>
              <p class="card-text">A: {{$a->answertext}}</p>
            </div>
          </div>
        </div>
      </div>

     @endforeach

      @endforeach
      <div style="height: 10vh"></div>
    </div>


    <h2> </h2>
    <h2> </h2>
    <h2> </h2>

    @include("partials.footer")


  </body>

  <script>

      function sendQuestionHandler(){
          console.log("done")
          window.location.reload()
      }

      function handler(){

      }

      function sendQuestion(product_id, user_id){
          let text = document.getElementById('question-input').value
          if(text == ''){
              let error = document.getElementById('question-error').style.display = 'block'
          }
          else {
            let message = document.getElementById('question-success').style.display = 'block'
            sendAjaxRequest('post', '/questions' , {text,product_id,user_id}, sendQuestionHandler )
          }


      }


      function sendAnswer(question_id, user_id){
          console.log(event.target.parent)
          let text = document.getElementById('answer-input-'+question_id).value
          if(text == ''){
              let error = document.getElementById('answer-error-'+question_id).style.display = 'block'
              let message = document.getElementById('answer-success-'+question_id).style.display = 'none'
          }
          else {
            let message = document.getElementById('answer-success-'+question_id).style.display = 'block'
            let error = document.getElementById('answer-error-'+question_id).style.display = 'none'
            sendAjaxRequest('post', '/answers' , {text,question_id,user_id}, sendQuestionHandler )
          }

        }

          function sendReview(product_id, user_id){

            let text = document.getElementById('review-input').value
            let rating = document.getElementById('review-rating').value
            if(text == ''){
              let error = document.getElementById('review-error').style.display = 'block'
          }
          else {
            let message = document.getElementById('review-success').style.display = 'block'
            sendAjaxRequest('post', '/reviews' , {text,product_id,user_id,rating}, sendQuestionHandler )
          }
      }

      function addCart(product_id,buyer_id){
        sendAjaxRequest('post', '/addcart' , {product_id,buyer_id}, handler )
      }

  </script>
</html>
