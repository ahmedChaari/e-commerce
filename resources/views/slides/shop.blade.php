
<style>
.product-grid4{margin-bottom: 23px;}
.product-grid4 .product-image4 img {height: 373px !important;box-shadow: 15px 0 65px rgba(0, 0, 0, 0.3);
  }
</style>



<div class="container mt-5">
    <h3 class="h3">Nouveaux produits</h3>
    <div class="row">
        <!-- single product -->
        <div class="col-md-3">

        @if($bests->count() > 0 )
    @foreach($bests as $best) 
                
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="/storage/{{ $best->image }}">
                            <img class="pic-2" src="{{ asset('/backend/assets/img/hover.jpg') }}">
                        </a>
                        <ul class="social">
                            <li><a href="{{ route('posts.show' , $best->name) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="{{ route('cart.rapid.add', ['id' => $best->id]) }}" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{ route('posts.single' , $best->name) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">- {{ number_format(((($best->price_promo - $best->price) * 100) / $best->price_promo) , 0) }}%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{ $best->name }}</a></h3>
                        <div class="price">
                        {{ $best->price }} DH
                            <span>{{ $best->price_promo }} DH</span>
                        </div>
                        <a class="add-to-cart" href="{{ route('cart.rapid.add', ['id' => $best->id]) }}">ADD TO CART</a>
                    </div>
                </div>
           
@endforeach
@else
      <h3 class="text-center mt-5 mb-5">data not found</h3>
@endif



        </div>
        <!-- les nouvou Produit -->
        <div class="col-md-9">
@if($posts->count() > 0 )
    @foreach($posts as $post) 
            <div class="col-md-4 col-sm-6">
                <div class="product-grid2">
                <span style="font-size: 100% !important;" class="label label-success lab-nouv">Nouveau</span>
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1"  src="/storage/{{ $post->image }}">
                            <img class="pic-2"  src="{{ asset('/backend/assets/img/hover.jpg') }}">
                        </a>
                
                        <ul class="social">
                            <li><a href="{{ route('posts.show' , $post->name) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="{{ route('cart.rapid.add', ['id' => $post->id]) }}" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{ route('posts.single' , $post->name) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    
                        <a class="add-to-cart" href="{{ route('cart.rapid.add', ['id' => $post->id]) }}">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{ $post->name }}</a></h3>
                        <span class="price">{{ $post->price }} DH</span>
                    </div>
                </div>
            </div>  
    @endforeach
@else
      <h3 class="text-center mt-5 mb-5">data not found</h3>
@endif 
        </div>
   
    </div>
    
</div>
<hr>
<div class="container">
    <h3 class="h3">Les Promotions Actuelles</h3>
    <div class="row">
    @if($specials->count() > 0 )
    @foreach($specials as $special) 
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img class="pic-1" src="/storage/{{ $special->image }}">
                        <img class="pic-2" src="{{ asset('/backend/assets/img/hover.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="{{ route('posts.show' , $special->name) }}" class="fa fa-search"></a></li>
                        <li><a href="{{ route('cart.rapid.add', ['id' => $special->id]) }}" class="fa fa-shopping-bag"></a></li>
                        <li><a href="{{ route('posts.single' , $special->name) }}" class="fa fa-shopping-cart"></a></li>
                    </ul>
                    <span class="product-discount-label">- {{ number_format(((($special->price_promo - $special->price) * 100) / $special->price_promo) , 0) }} %</span>
                </div>
                <center>
                    <div class="product-content">
                        <div class="price">{{ $special->price }} DH
                            <span style="color:red">{{ $special->price_promo }} DH</span>
                        </div>
                     
                        <h3 class="title"><a href="#">{{ $special->name }}</a></h3>
                        <a class="btn btn-primary" href="{{ route('posts.show' , $special->name) }}">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </center>
                
            </div>
        </div>
        @endforeach
    @else
      <h3 class="text-center mt-5 mb-5">data not found</h3>
    @endif        
    </div>
</div>   
<!-- slider product -->
<hr>



