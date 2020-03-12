<style>

.head-icon{
    padding: 17px 0px;
    font-size: 14px;
    color: #333;
}
</style>
        <!-- Top Bar -->
        <div class="top_bar">
        @if($heads->count() > 0 )
    @foreach($heads as $head) 
            <div class="container">
                <div class="row">


                    <div class="col d-flex flex-row">
   
                       <div class="col-md-2 head-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                             {{ $head->tel }}
                        </div>
                        <div class="col-md-2 head-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            {{ $head->adress }}
                        </div>
                        <div class="col-md-2 head-icon">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                            {{ $head->email }}
                        </div>
                        <div class="col-md-2 head-icon">
                              <!-- if you need to add new profile -->
                        </div>
                        <div class="col-md-2" style="padding-left: 100px;FONT-SIZE: 14PX;">
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li> <a href="#">English<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
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
                    
                        <img style="width: 100%; margin: 9px 4px;" src="/storage/{{ $head->image }}" alt="Logo-footer"><br>
                
                       
                    </div> <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix"> 
                                        <input type="search" style="z-index: 3;" required="required" class="header_search_input" placeholder="Search for products...">
                                    <div>
                                        <ul class="standard_dropdown main_nav_dropdown">
                                            <li class="hassubs" ><a style="margin: -6px 53px 0px 0px;" href="#">All Categories</a>
                                                <ul >
                                                    <li><a href="#" >All Categories<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Computers<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Laptops<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Cameras<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Hardware<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                                    <li><a href="#">Smartphones<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
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
                                <div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                    <div class="wishlist_count">10</div>
                                </div>
                            </div> <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                        <div class="cart_count"><span>3</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Cart</a></div>
                                        <div class="cart_price">$185</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">Home<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                    <li class="hassubs"> <a href="#">Laptop<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li> <a href="#">Lenovo<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
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
                                    <li class="hassubs"> <a href="#">Featured Brands<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li> <a href="#">APPLE<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
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
                                    <li class="hassubs"> <a href="#">Pages<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
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
                                    <li><a href="blog.html">Blog<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
                                    <li><a href="contact.html">Contact<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
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
       




<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="">

$(document).ready(function()
{
"use strict";

var menuActive = false;
var header = $('.header');
setHeader();
initCustomDropdown();
initPageMenu();

function setHeader()
{

if(window.innerWidth > 991 && menuActive)
{
closeMenu();
}
}

function initCustomDropdown()
{
if($('.custom_dropdown_placeholder').length && $('.custom_list').length)
{
var placeholder = $('.custom_dropdown_placeholder');
var list = $('.custom_list');
}

placeholder.on('click', function (ev)
{
if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}

$(document).one('click', function closeForm(e)
{
if($(e.target).hasClass('clc'))
{
$(document).one('click', closeForm);
}
else
{
list.removeClass('active');
}
});

});

$('.custom_list a').on('click', function (ev)
{
ev.preventDefault();
var index = $(this).parent().index();

placeholder.text( $(this).text() ).css('opacity', '1');

if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}
});


$('select').on('change', function (e)
{
placeholder.text(this.value);

$(this).animate({width: placeholder.width() + 'px' });
});
}

/*

4. Init Page Menu

*/

function initPageMenu()
{
if($('.page_menu').length && $('.page_menu_content').length)
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
var menuTrigger = $('.menu_trigger');

//Open / close page menu
menuTrigger.on('click', function()
{
if(!menuActive)
{
openMenu();
}
else
{
closeMenu();
}
});

//Handle page menu
if($('.page_menu_item').length)
{
var items = $('.page_menu_item');
items.each(function()
{
var item = $(this);
if(item.hasClass("has-children"))
{
item.on('click', function(evt)
{
evt.preventDefault();
evt.stopPropagation();
var subItem = item.find('> ul');
if(subItem.hasClass('active'))
{
subItem.toggleClass('active');
TweenMax.to(subItem, 0.3, {height:0});
}
else
{
subItem.toggleClass('active');
TweenMax.set(subItem, {height:"auto"});
TweenMax.from(subItem, 0.3, {height:0});
}
});
}
});
}
}
}

function openMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.set(menuContent, {height:"auto"});
TweenMax.from(menuContent, 0.3, {height:0});
menuActive = true;
}

function closeMenu()
{
var menu = $('.page_menu');
var menuContent = $('.page_menu_content');
TweenMax.to(menuContent, 0.3, {height:0});
menuActive = false;
}


});
</script>
@include('layouts.slide')

