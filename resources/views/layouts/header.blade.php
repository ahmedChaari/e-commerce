
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

