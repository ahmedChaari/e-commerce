<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/backend/assets/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('/backend/assets/img/favicon.png') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>

    Travel Company Manage
</title>
<style>
.boutonarticle{
box-shadow:0px 0px 10px red;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
@toastr_css
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('/backend/assets/css/toastr.min.css') }}">
<link href="{{ asset('/backend/assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    @yield('css')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('/backend/assets/demo/demo.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<script src="{{ asset('/backend/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('/backend/assets/img/sidebar-1.jpg') }}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
       
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
        <div class="photo">
            <img src="{{ asset('/backend/assets/img/default-avatar.png') }}" />
        </div>
        <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
            <span>
                Admin
                <b class="caret"></b>
            </span>
            </a>
            <div class="collapse" id="collapseExample">
            <ul class="nav">
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                </a>
                </li>
            </ul>
            </div>
        </div>

        </div>
        <ul class="nav">
        <li class="nav-item active ">
            <a class="nav-link" href="/home">
            <i class="material-icons">dashboard</i>
            <p> Tableau de Bord </p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#Examples">
            <i class="material-icons">apps</i>
            <p> Param??tre
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="Examples">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('heads.index') }}">
                        <span class="sidebar-mini"> HP</span>
                        <span class="sidebar-normal"> Gestion Head de Page</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('headers.index') }}">
                        <span class="sidebar-mini"> H</span>
                        <span class="sidebar-normal"> Gestion Headers</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('footers.index') }}">
                        <span class="sidebar-mini"> F</span>
                        <span class="sidebar-normal"> Gestion Footers</span>
                    </a>
                </li>
                @if (auth()->user()->isAdmin())
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <span class="sidebar-mini"> U</span>
                            <span class="sidebar-normal"> Gestion Utilisateurs</span>
                        </a>
                    </li>
                @endif
            </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
            <i class="material-icons">image</i>
            <p> Gestion des Produits
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="pagesExamples">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        <span class="sidebar-mini"> C</span>
                        <span class="sidebar-normal"> Gestion Categories</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('posts.index') }}">
                        <span class="sidebar-mini">P</span>
                        <span class="sidebar-normal"> Gestion Produit</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('posts.trashed') }}">
                        <span class="sidebar-mini"> P</span>
                        <span class="sidebar-normal"> Produit supprimer</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <span class="sidebar-mini">E</span>
                        <span class="sidebar-normal"> Customers </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('headers.index') }}">
                        <span class="sidebar-mini"> H</span>
                        <span class="sidebar-normal"> Gestion Header </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <span class="sidebar-mini"> V </span>
                        <span class="sidebar-normal"> Utilisateurs </span>
                    </a>
                </li>
            </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link"  href="#">
            <i class="material-icons">apps</i>
            <p> Param??tre
                <b class="caret"></b>
            </p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link"  href="{{ route('posts.list')}}">
            <i class="material-icons">content_paste</i>
            <p> Orders
                <b class="caret"></b>
            </p>
            </a>
        
            </ul>
            </div>
        </li>
        </ul>
    </div>
    <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
            </button>
            </div>
            <!-- <a class="navbar-brand" href="#pablo">Dashboard</a> -->
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#pablo">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">
                    Stats
                </p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">notifications</i>
                @if(count($valids) > 0 )
                  <a href="{{ route('orders.index') }}"><span class="notification boutonarticle">{{ $valids->count() }}</span></a>  
                @else 
                    <span class="notification">0</span>
                @endif
                    <p class="d-lg-none d-md-block">
                Some Actions
                </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                @if(count($valids) > 0 )
                <a class="dropdown-item boutonarticle" href="{{ route('orders.index') }}">You have &nbsp;<span style="color: #3490dc;font-size: 14px;"> {{ $valids->count() }} new Orders</span></a>
                @else 
                <a class="dropdown-item" href="{{ route('orders.index') }}">You Don't have any Order</span></a>
                @endif
                <a class="dropdown-item" href="#">You're now friend wi</a>
                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                <a class="dropdown-item" href="#">Another Notification</a>
                <a class="dropdown-item" href="#">Another One</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                    Account
                </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="{{ route('users.edit-profile') }}">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
         
        </div>
    </div>

           

            <!--   Core JS Files   -->
            <script src="{{ asset('/backend/assets/js/core/popper.min.js') }}"></script>
            <script src="{{ asset('/backend/assets/js/core/jquery.min.js') }}"></script>
            <script src="{{ asset('/backend/assets/js/core/bootstrap-material-design.min.js') }}"></script>
            <script src="{{ asset('/backend/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
            <!-- Plugin for the momentJs  -->
            <script src="{{ asset('/backend/assets/js/plugins/moment.min.js') }}"></script>
            <!--  Plugin for Sweet Alert -->
            <script src="{{ asset('/backend/assets/js/plugins/sweetalert2.js') }}"></script>
            <!-- Forms Validations Plugin -->
            <script src="{{ asset('/backend/assets/js/plugins/jquery.validate.min.js') }}"></script>
            <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
            <script src="{{ asset('/backend/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
            <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
            <script src="{{ asset('/backend/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
            <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
            <script src="{{ asset('/backend/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
            
            <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
            <script src="{{ asset('/backend/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
            <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
            <script src="{{ asset('/backend/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
            <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
            <script src="{{ asset('/backend/assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
            <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
            <script src="{{ asset('/backend/assets/js/plugins/fullcalendar.min.js') }}"></script>
            <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
            <script src="{{ asset('/backend/assets/js/plugins/jquery-jvectormap.js') }}"></script>
            <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
            <script src="{{ asset('/backend/assets/js/plugins/nouislider.min.js') }}"></script>
            <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
            <!-- Library for adding dinamically elements -->

            <script src="{{ asset('/backend/assets/js/plugins/arrive.min.js') }}"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
          
            <!-- Chartist JS -->
            <script src="{{ asset('/backend/assets/js/plugins/chartist.min.js') }}"></script>
            <!--  Notifications Plugin    -->
            <script src="{{ asset('/backend/assets/js/plugins/bootstrap-notify.js') }}"></script>
            <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="{{ asset('/backend/assets/js/material-dashboard.js?v=2.1.0') }}" type="text/javascript"></script>
            <!-- Material Dashboard DEMO methods, don't include it in your project! -->
            <script src="{{ asset('/backend/assets/demo/demo.js') }}"></script>
            <script src="{{ asset('/backend/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('/backend/assets/js/toastr.min.js') }}"></script>
            <script src="{{ asset('/backend/assets/js/admin-min.js') }}"></script>
          
    @jquery
   
   <script src="{{ asset('js/app.js') }}"></script> 
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
   <script src="{{ asset('js/toastr.js') }}" defer></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   @toastr_js
   @toastr_render
 <!--   Color JS Files   -->
 <script src="{{ asset('app/js/jscolor.js') }}"></script> 


<script>
  @if(Session::has('success'))
    toastr.success('{{ Session::get('success') }}');
  @endif
</script>


@yield('scripts')
</body>

</html>