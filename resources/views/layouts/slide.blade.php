  <style>

.font-fa{
  font-size: 21px;
}
.delivery{
 
    background-color: #c5cac752;
    padding: 24px 12px 24px 20px;
    margin-top: 17px;
    border-width: 1px;
    border-right-style: double;
    text-align: center;
}
.delivery:hover {
    margin: 7px 0px 4px 0px;
    color: white;
    background-color: #1c7ed6;
    

}
.header-style h5{
  font-size: 40px;
  font-size: 66px;
  margin-bottom: 80px;
  background-color: #00000047;
}

.header-style p{
    font-size: 24px;
    margin-bottom: 100px;
    color: white;
    background-color: #00000047;
}

  </style>


  <!-- END NAV BAR-->
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> 
    <div class="carousel-inner">
    @if($headers->count() > 0 )
    @foreach($headers->take(3) as $header) 
      <div class="item @if($loop->first) active @endif ">
        <img style="height: 575px;width: 100%;" src="/storage/{{ $header->image }}" alt="{{ $header->description }}" style="width:100%;">
          <div class="carousel-caption d-none d-md-block header-style">
            <h5>{{ $header->title }}</h5>
            <p>{{ $header->description }}</p>
          </div>
      </div>
    @endforeach
    @else
      <h3 class="text-center mt-5 mb-5">data not found</h3>
    @endif
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
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-3 delivery">
        <i class="fa fa-truck font-fa" aria-hidden="true"></i>
        <p>Livraison Gratuite Kenitra <br>
        À partir de 1000 DH
        </p>
      </div>
      <div class="col-md-3 delivery">
        <i class="fa fa-paypal font-fa" aria-hidden="true"></i>
        <p>Possibilité Paiement <br>à La Livraison
        </p>
      </div>
      <div class="col-md-3 delivery">
        <i class="fa fa-product-hunt font-fa" aria-hidden="true"></i>
        <p>Produits Testés <br>et Garanties
      
        </p>
      </div>
      <div class="col-md-3 delivery">
        <i class="fa fa-tachometer font-fa" aria-hidden="true"></i>
        <p>Assistance <br> Technique
        </p>
      </div>
    </div>
  </div>


