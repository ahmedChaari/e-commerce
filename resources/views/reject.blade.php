<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>



rest a faire :
    - retoure de content (balise HTML to page web)




    





  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">  
        <img src="https://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-ae2a18f7.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-453c082d.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-5fe97ae8.png" alt="New york" style="width:100%;">
      </div>
    </div>

   
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<img src="https://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-453c082d.png"  alt="New York" width="1100" height="500">
<img src="https://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-ae2a18f7.png" alt="Chicago" width="1100" height="500">
<img src="https://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-5fe97ae8.png" alt="Los Angeles" width="1100" height="500">



 <!-- Index Page Home -->

<style>
       .marg-cart{
        margin-bottom: 12px !important;
       }
  
   </style>

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
           
           <div class="books-grid">
                  <div class="row mb30">
                   @foreach($posts as $post) 
                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 marg-cart">
                           <div class="books-item ">
                               <div class="books-item-thumb">
                                   <img style="withe:100px !important; height:100px !important" src="/storage/{{ $post->image }}" alt="book">
                                   <div class="new">New</div>
                                   <div class="sale">Sale</div>
                                   <div class="overlay overlay-books"></div>
                               </div>
                               <div class="books-item-info">
                                   <a href="{{ route('posts.single' , $post->id) }}">
                                       <h5 class="books-title">{{ $post->name }}</h5>
                                   </a>
                                   <div class="books-price">${{ $post->price }}</div>
                               </div>
                               <a href="{{ route('cart.rapid.add', ['id' => $post->id]) }}" class="btn btn-small btn--dark add">
                                   <span class="text">Add to Cart</span>
                                   <i class="seoicon-commerce"></i>
                               </a>
                           </div>
                       </div>
                   @endforeach
                  </div>
                   <div class="row pb120">
                       <div class="col-lg-12">                  
                       {{ $posts->links() }}
                       </div>
                   </div> 
           </div>
       </div>
    </div>







    <style>


.faa:before{
content: '|';
  color: #0787ea;
  display: inline-block;
  margin: 0 1em;
}

</style>
<header class="header" id="site-header" style="background-color: aliceblue;">
<div class="container">
  <div class="header-content-wrapper" >
      <ul class="nav-add">
          <li class="cart">
              <a href="#" class="js-cart-animate">
                  <i class="seoicon-basket"></i>
                  <span class="cart-count">{{ Cart::content()->count() }}</span>
              </a>
              <div class="cart-popup-wrap">
                  <div class="popup-cart">
                      <h4 class="title-cart align-center">{{ Cart::total() }}DH</h4>
                     <br>
                      <a href="/cart">
                          <div class="btn btn-small btn--dark">
                              <span class="text">view all catalog</span>
                          </div>
                      </a>
                  </div>
              </div>
          </li>
          <li  class="cart faa">
            <a  href="{{ route('login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>                
            </a>   
          </li>
         
      </ul>  
  </div> 
</div>
</header>
@include('layouts.slide')




 <!-- nav bar -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>






      @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                @include('erreurs.erreur')
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
