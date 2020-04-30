@extends('layouts.front')

@section('content')

<style>

.search-message{
    color: #8c300d;
    font-size: 16px;
    
    text-align: center;
}
</style>
@if(isset($posts))
 <!-- les nouvou Produit -->

        <nav style="padding: 2% 10%;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">  </a></li>
            </ol>
        </nav>

 @foreach($posts as $post)

 <div class="container">

    <div class="row medium-padding120">
        <div class="product-details">   
           
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">  
                <div class="product-details-thumb">
                    <div class="swiper-container" data-effect="fade">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="product-details-img-wrap">
                                <img  src="/storage/{{ $post->image }}" alt="product" data-swiper-parallax="-10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div class="product-details-info">
                    <div class="product-details-info-price">${{ $post->price }}</div>
                    <h3 class="product-details-info-title">{{ $post->name }} 
                        <strong style="color: #f26522;float:right">{{ $post->category->name }}</strong>
                    </h3>
                    <p class="product-details-info-text">{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    
    
   
    </div>
</div>

@endforeach

@elseif(isset($message))
<div style="padding: 2% 10%;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">    </a></li>
            </ol>
        </nav>
        <p class="search-message">{{ $message }}</p> 
</div>
@endif
@endsection