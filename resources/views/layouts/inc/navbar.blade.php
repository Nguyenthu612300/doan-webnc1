<div class="container-fluid header" >
  <div class="container"  >
    <div class="row" >
      <div class="col-12" >
        <nav class="navbar navbar-expand-lg navbar-light"  >
          <div class="container-fluid" style="margin-left:100px; ">
            {{-- Logo --}}
            <a class="navbar-brand" href="/">
              <img src="{{ asset('/frontend/icon/logo.png') }}" style="width:85px; height: 70px; " alt="">
              <a class="nav-link active" aria-current="page" href="/" style="text-decoration: none; color: #232526; font-size: 16.5px; margin-top:-5px">Home</a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            {{-- End Logo --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- List Category --}}
                <li class="nav-item dropdown navbar-link">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#232526">
                    <i class="far fa-list-alt"></i> Danh Mục
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="../category/{{ $category->id }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                {{-- End List Category --}}

                {{-- Call Phone --}}
                <li class="navbar-link">
                  <a href="">

                  </a>
                </li>
                {{-- End Call Phone --}}

                {{-- Search --}}
                <form class="d-flex a" action="{{ route('search') }}" method="GET" >
                  <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
                  <button class="btn btn-outline-success" type="submit" >Search</button>
                </form>
                {{-- End Search --}}

                {{-- Cart --}}
                <li class="nav-item">
                  <a href="/cart" class="nav-link">
                    
                    <i class="fa-sharp fa-solid fa-cart-shopping cart" value="
                                        @php
                                            if(Session::has('products')){
                                                $products = session('products');
                                                echo count($products);
                                            }else {
                                                echo '0';
                                            } 
                                        @endphp
                                        " style="color: #ffffff;"></i> <img src="{{ asset('/frontend/icon/cart6.jpg') }}" width="35px" height="30px" alt="">
                  </a>
                </li>



                {{-- End Cart --}}

                {{-- Login --}}
                <ul class="navbar-nav ms-auto">
                  @guest
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user"></i> <img src="{{ asset('/frontend/icon/admin.png') }}" width="25px"  alt="">
                    </a>


                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @if (Route::has('login'))
                      <li class="nav-item">
                        <a class="nav-link navbar-link my-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @endif

                      @if (Route::has('register'))
                      <li class="nav-item">
                        <a class="nav-link navbar-link my-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                      @endif
                    </ul>
                  </li>
                  @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                      <a class="dropdown-item navbar-link nav-logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
                  @endguest
                </ul>

                


                {{-- End Login --}}


                <ul class="navbar-nav" >
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin" style="font-size: 17px">Admin
                      {{-- <img src="{{asset('frontend/icon/admin.png')}}" alt="" width="30px" height="30px"> --}}
                    </a>
                  </li>
                </ul>
  



              </ul>




              

            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>