@extends('layouts.front')

@section('content')
<style>
.bay12{ padding: 18px 25px 18px 25px;}
h5{font-size: 22px;}



</style>
<div class="container mt-13">
    <div class="row">
            @if($posts->count() > 0 )
            @foreach($posts as $post) 
                    <div class="col-md-4 col-sm-6 ">
                        <div class="product-grid2">
                        <span class="label label-success lab-nouv">Nouveau</span>
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1"  src="/storage/{{ $post->image }}">
                                    <img class="pic-2"  src="/storage/{{ $post->image }}">
                                </a>
                        
                                <ul class="social">
                                    <li><a href="{{ route('posts.show' , $post->id) }}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{ route('cart.rapid.add', ['id' => $post->id]) }}" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="{{ route('posts.single' , $post->id) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
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


@endsection