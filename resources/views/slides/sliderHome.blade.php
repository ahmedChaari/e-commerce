<!------ slider carousel for Index home ---------->
<style>
    .slider-4{font-size: 14px;}
    .slider-5{font-size: 15px;}
    .slider-home{margin-bottom: 23px;}
    
</style>

<div class="container slider-home">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            
            <div class="carousel-inner">  
                <div class="item active">
                    <div class="row">
                    @if($items->count() > 0 )
                    @foreach( $items->take(4) as  $item) 
                    <div class="col-sm-3">
                        <div class="product-grid8">
                            <div class="product-image8">
                                <a href="#">
                                    <img style="height: 238px;" class="pic-1" src="/storage/{{ $item->image }}">
                                    <img style="height: 238px;" class="pic-2" src="{{ asset('/backend/assets/img/hover.jpg') }}">
                                   
                                </a>
                                <ul class="social">
                                    <li><a href="{{ route('posts.show' , $item->name) }}" class="fa fa-search"></a></li>
                                    <li><a href="{{ route('cart.rapid.add', ['id' => $item->id]) }}" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="{{ route('posts.single' , $item->name) }}" class="fa fa-shopping-cart"></a></li>
                                </ul>
                               
                            </div>
                            <center>
                                <div class="product-content">
                                    <div class="price">{{ $item->price }} DH
                                        <a href="{{ route('posts.show' , $item->name) }}"><h5 style="color: #f26522;">{{ $item->name }}</h5></a>
                                        <center>
                                            <a class="btn btn-info btn-sm" href="{{ route('posts.single' , $item->name) }}" data-tip="Add to Cart">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                                        </center>
                                    </div>
                                    
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
                <div class="item">
                    <div class="row">
                    @if($item_actives->count() > 0 )
                    @foreach( $item_actives->take(4) as  $item_active) 
                    <div class="col-sm-3">
                        <div class="product-grid8">
                            <div class="product-image8">
                                <a href="#">
                                    <img style="height: 238px;" class="pic-1" src="/storage/{{ $item_active->image }}">
                                    <img style="height: 238px;" class="pic-2" src="{{ asset('/backend/assets/img/hover.jpg') }}">
                                   
                                </a>
                                <ul class="social">
                                    <li><a href="{{ route('posts.show' , $item_active->name) }}" class="fa fa-search"></a></li>
                                    <li><a href="{{ route('cart.rapid.add', ['id' => $item_active->id]) }}" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="{{ route('posts.single' , $item_active->name) }}" class="fa fa-shopping-cart"></a></li>
                                </ul>
                               
                            </div>
                            <center>
                                <div class="product-content">
                                    <div class="price">{{ $item_active->price }} DH
                                        <a href="{{ route('posts.show' , $item_active->name) }}"><h5 style="color: #f26522;">{{ $item_active->name }}</h5></a>
                                        <center>
                                            <a class="btn btn-info btn-sm" href="{{ route('posts.single' , $item_active->name) }}" data-tip="Add to Cart">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                                        </center>
                                    </div>
                                    
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
                
            </div>
        </div>
    </div>
<hr>
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                    @if($item_actives->count() > 0 )
                    @foreach( $item_actives->take(3) as  $item_active) 
                        <div class="col-sm-4">  
                            <div class="product-grid4">
                                <div class="product-image4">
                                    <a href="#">
                                        <img style="height: 346px; width: 369px;" class="pic-1" src="/storage/{{ $item_active->image }}">
                                        <img style="height: 346px; width: 369px;" class="pic-2" src="{{ asset('/backend/assets/img/hover.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{ route('posts.show' , $item_active->name) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="{{ route('cart.rapid.add', ['id' => $item_active->id]) }}" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li><a href="{{ route('posts.single' , $item_active->name) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <span class="product-new-label">New</span>
                                
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $item_active->name }}</a></h3>
                                    <div class="price">
                                    {{ $item_active->price }} DH
                                        <span>{{ $item_active->price_promo }} DH</span>
                                    </div>
                                    <a class="add-to-cart" href="{{ route('cart.rapid.add', ['id' => $item_active->id]) }}">ADD TO CART</a>
                                </div>
                                </div>       
                                    </div>
                                @endforeach 
                                @else
                                    <h3 class="text-center mt-5 mb-5">data not found</h3>
                                @endif   
                            </div>
                        </div>
                <div class="item">
                    <div class="row">
                    @if($items->count() > 0 )
                    @foreach( $items->take(3) as  $item) 
                       
                    <div class="col-sm-4">  
                            <div class="product-grid4">
                                <div class="product-image4">
                                    <a href="#">
                                        <img style="height: 346px; width: 369px;" class="pic-1" src="/storage/{{ $item->image }}">
                                        <img style="height: 346px; width: 369px;" class="pic-2" src="{{ asset('/backend/assets/img/hover.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{ route('posts.show' , $item->name) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="{{ route('cart.rapid.add', ['id' => $item->id]) }}" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li><a href="{{ route('posts.single' , $item->name) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <span class="product-new-label">New</span>
                                
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $item->name }}</a></h3>
                                    <div class="price">
                                    {{ $item->price }} DH
                                        <span>{{ $item->price_promo }} DH</span>
                                    </div>
                                    <a class="add-to-cart" href="{{ route('cart.rapid.add', ['id' => $item->id]) }}">ADD TO CART</a>
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
            </div>
        </div>
    </div>
</div>
