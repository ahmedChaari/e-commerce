 <style>
 
 .navbar
   {
      margin-bottom: 0px !important;
   }
    .navbar-default
    {
    background-color: #1c7ed6 !important;
    /*border-color: #0d2b3c !important;*/
    }
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    }

.navbar-brand{
  font-size: 28px;
    color: white !important;

}
 </style>
  <!-- NAV BAR -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <!-- Img logo for sitWeb -->
     <!-- <a class="navbar-brand" href="#">
        <img alt="Brand" src="{{ asset('/backend/assets/img/logo.png') }}">
      </a> -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      <i class="fa fa-home" aria-hidden="true"></i>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Ctagories</a></li>
        <li><a href="#">Poduct</a></li>
        <li><a href="#">Our Contry</a></li> 
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
        
         <!-- cart count panel -->
         <li class="cart">
              <a href="#" class="js-cart-animate ">
                  <i class="seoicon-basket font-fa"></i>
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
          <li  class="cart">
            <a  href="{{ route('login') }}">
              <i class="fa fa-user font-fa" aria-hidden="true"></i>                
            </a>   
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  