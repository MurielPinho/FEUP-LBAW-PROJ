<nav class="navbar navbar-expand-lg navbar-light bg-light navbar sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <img src="/assets/iconpc.png" alt="..." width = "50" height = "50" class="mx-2">
        <a class="navbar-brand" href="{{ url('/') }}">Digital Prime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/products') }}">Products</a>
              </li>
            @if (Auth::user())
                @if (Auth::user()->isadmin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/backoffice') }}"> Backoffice </a>
                </li>
                @endif
            @endif

            @if (Auth::user())
            <li class="nav-item">
                <a class="nav-link" href="{{url('loginreg-edit')}}/{{Auth::user()->id}}"> Edit Profile </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}"> Logout </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('cart')}}">Shopping Cart</a>
              </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Login | Register</a>
            </li>

            @endif


          </ul>

        </div>
      </div>
    </nav>
