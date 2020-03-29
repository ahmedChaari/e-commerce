
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


