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


                          
    


                               <form action="{{ route('posts.search') }}" method="post" role="search" class="header_search_form clearfix"> 
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" /> 
                                   <input type="search" style="z-index: 3;" required="required" 
                                   class="header_search_input" name="search" placeholder="Search for products...">
                               
                               <button type="submit" class="header_search_button trans_300" value="Submit">
                                    <img src="{{ asset('/backend/assets/img/search.png') }}" alt=""></button>
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


   @if($heads->count() > 0 )
    @foreach($heads as $head) 
<style>

.head-icon{
    padding: 17px 0px;
    color: #{{ $head->colorStyle }};
    
    
}


</style> 
       <nav class="main_nav" style="BACKGROUND-COLOR:#{{ $head->colorNav }};color:#FFFFFF">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#" style="color:#{{ $head->colorStyleNav }}">Home<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                    <li class="hassubs"> <a style="color:#{{ $head->colorStyleNav }} " href="#">Laptop<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li><a href="#">Lenovo<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                                <ul>
                                                    <li><a href="#">Lenovo 1<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Lenovo 3<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Lenovo 2<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">DELL<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="#">APPLE<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="#">HP<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs"> <a style="color:#{{ $head->colorStyleNav }}" href="#">Featured Brands<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li> <a  href="#">APPLE<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                                <ul>
                                                    <li><a href="#">Laptop<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Mobiles<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Ipads<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Samsung<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="#">Lenovo<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="#">DELL<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs"> <a href="#" style="color:#{{ $head->colorStyleNav }}">Pages<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li><a href="shop.html">Shop<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="product.html">Product<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="blog.html">Blog<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="blog_single.html">Blog Post<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="regular.html">Regular Post<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="cart.html">Cart<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                            <li><a href="contact.html">Contact<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html" style="color:#{{ $head->colorStyleNav }}">Blog<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                    <li><a href="contact.html" style="color:#{{ $head->colorStyleNav }}">Contact<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> <!-- Menu Trigger -->
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> <!-- Menu -->
       

        @endforeach
               @else
                   <h3 class="text-center mt-5 mb-5">data not found</h3>
               @endif 


<script src=" {{ asset('/backend/assets/js/admin.js')}}"></script>


