@if($heads->count() > 0 )
    @foreach($heads as $head) 
    <style>

.head-icon{
    padding: 17px 0px;
    font-family: initial;  
    color: #{{ $head->colorStyle }};  
    
}
.category-search{margin: -6px 60px 0px 0px;font-family: initial; }
</style> 
       <!-- Top Bar -->
       <div class="top_bar" style="box-shadow: 15px 0 65px rgba(0, 0, 0, 0.3);BACKGROUND-COLOR:#{{ $head->colorHead }};font-size:{{ $head->fontSizeHead }}px;">
       
       <div class="container">
           <div class="row">


               <div class="col d-flex flex-row">

                  <div class="col-md-2 head-icon">
                       <i class="fa fa-phone" aria-hidden="true"></i> : {{ $head->tel }}
                   </div>
                   <div class="col-md-2 head-icon">
                       <i class="fa fa-envelope-o" aria-hidden="true"></i> : {{ $head->email }}
                   </div>
                   <div class="col-md-2 head-icon">
                   <i class="fa fa-address-card-o" aria-hidden="true"></i> : {{ $head->adress }}
                   </div>
                   <div class="col-md-3 head-icon">
                         <!-- if you need to add new profile -->
                   </div>
                   <div class="col-md-1" >
                       <ul class="standard_dropdown top_bar_dropdown ">
                           <li style=" color: #{{ $head->colorStyle }}; font-family:initial;font-size: 14PX;"> <a href="#" >English<i class="fa fa-chevron-down " aria-hidden="true"></i></a>
                               <ul>
                                   <li><a href="#">Italian</a></li>
                                   <li><a href="#">Spanish</a></li>
                                   <li><a href="#">Japanese</a></li>
                               </ul>
                           </li>
                               
                       </ul>
                   </div>
                   <div class="col-md-2 head-icon">
                           <i class="fa fa-user" aria-hidden="true"></i>    
                           <a  href="{{ route('login') }}">Sign in</a>
                   </div>
             
               </div>
           </div>
       </div>
   </div> <!-- Header Main -->
   <div class="header_main">
       <div class="container">
           <div class="row">
               <!-- Logo -->
               <div class="col-lg-2 col-sm-3 col-3 order-1">
               <a href="/"><img style="width: 100%; margin: 9px 4px;" src="/storage/{{ $head->image }}" alt="Logo-footer"><br></a>
                   
           
                  
               </div> <!-- Search -->
               <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                   <div class="header_search">
                       <div class="header_search_content">
                           <div class="header_search_form_container">
                               <form action="#" class="header_search_form clearfix"> 
                                   <input type="search" style="z-index: 3;" required="required" class="header_search_input" placeholder="Search for products...">
                               <div>
                                   <ul class="standard_dropdown main_nav_dropdown category-search">
                                       <li class="hassubs " ><a class="" href="#">Categories</a>
                                           <ul>
                                               @if($categories->count() > 0 )
                                                    <li><a href="#" >All Categories<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                @foreach($categories->slice(0, 5) as $category) 
                                                    <li><a href="#" >{{ $category->name }}<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                @endforeach
                                                @else
                                                    <li><a href="#">data not found<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                @endif 
                                           </ul>
                                       </li>
                                   </ul>
                               </div>
                               <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div> <!-- Wishlist -->


               @endforeach
               @else
                   <h3 class="text-center mt-5 mb-5">data not found</h3>
               @endif 

               <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                   <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                       <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                           <div class="wishlist_icon"><img src="{{ asset('/backend/assets/img/heart.png') }}" alt=""></div>
                           <div class="wishlist_content">
                               <div class="wishlist_text"><a href="#">Wishlist</a></div>
                               <div class="wishlist_count">10</div>

                           </div>
                       </div> <!-- Cart --> 
                       
                       <div class="cart">
                           <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                               <div class="cart_icon"> <img src="{{ asset('/backend/assets/img/cart.png') }}" alt="">
                                   <div class="cart_count"><span>{{ Cart::content()->count() }}</span></div>
                               </div>
                               <div class="cart_content">
                                   <div class="cart_text"><a href="/cart">Cart</a></div>
                                   <div class="cart_price">{{ Cart::total() }} DH</div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div> <!-- Main Navigation -->
