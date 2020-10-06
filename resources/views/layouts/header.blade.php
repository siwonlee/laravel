<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>

*{

font-size: 13px;

}


        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>


    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown-right">


{{--
          <div class=" nav-link user-panel   d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>

          </div> --}}


{{--  --}}

@include('layouts.avarta-icon')

{{--  --}}








      </li>


    </ul>





  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
    <img src="{{asset('storage/MD_logo.png')}}" alt=" " class="brand-image   elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">APL Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <? $segment = Request::segment(1);?>

               <li class="nav-header">UPC/PLU</li>
          <li class="nav-item has-treeview  @if( $segment == 'approved') menu-open @endif  ">
            <a href="#" class="nav-link @if( $segment == 'approved') active @endif ">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>
                Approved
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">





               <li class="nav-item"><a href="{{route('approved')}}" class="nav-link">  <p>All</p> <span class="label label-success label-as-badge">  </span></a> </li>
               <li class="nav-item"><a href="{{asset('approved/2')}}" class="nav-link"><p>02-Cheese or Tofu</p> <span class="label label-success label-as-badge">  </span></a> </li>
                 <li class="nav-item"><a href="{{asset('approved/3')}}" class="nav-link"><p>03-Eggs </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/5')}}" class="nav-link"><p>05-Breakfast Cereal </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/6')}}" class="nav-link"><p>06-Legumes </p><span class="label label-success label-as-badge"> </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/8')}}" class="nav-link"><p>08-Fish </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/9')}}" class="nav-link"><p>09-Infant Cereal </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/12')}}" class="nav-link"><p>12-Infant Fruits & Vegetables</p> <span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/13')}}" class="nav-link"><p>13-Infant Meats</p> <span class="label label-success label-as-badge"> </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/16')}}" class="nav-link"><p>16-Bread/Whole Grains </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/19')}}" class="nav-link"><p>19-Fruit & Vegetables Cash Value </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/21')}}" class="nav-link"><p>21-Infant Formula(IF) </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/31')}}" class="nav-link"><p>31-Exempt Infant Formula(EXF) </p><span class="label label-success label-as-badge"> </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/41')}}" class="nav-link"><p>41-WIC Eligible Nutritionals</p> <span class="label label-success label-as-badge">  </span> </a> </li>

                 <li class="nav-item"><a href="{{asset('approved/50')}}" class="nav-link"> <p>50-Yogurt</p> <span class="label label-success label-as-badge">  </span></a> </li>

                 <li class="nav-item"><a href="{{asset('approved/51')}}" class="nav-link"> <p>51-Milk-whole </p><span class="label label-success label-as-badge">  </span></a> </li>
                 <li class="nav-item"><a href="{{asset('approved/52')}}" class="nav-link"><p>52-Milk Low Fat/fat free</p> <span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/53')}}" class="nav-link"><p>53-Frozen Juice </p><span class="label label-success label-as-badge">  </span> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/54')}}" class="nav-link"><p>54-Juice-64oz</p> <span class="label label-success label-as-badge">  </span> </a> </li>







              </ul>





          </li>




          <li class="nav-item has-treeview">
          <a href="{{route('pending')}}" class="nav-link @if( $segment == 'pending') active @endif">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Pending

                <span class="badge badge-info right">6</span>
              </p>
            </a>


          </li>









          <li class="nav-item has-treeview">
            <a href="{{route('denied')}}" class="nav-link @if( $segment == 'denied') active @endif">
                <i class="nav-icon fas fa-thumbs-down"></i>
              <p>
                Denied

              </p>
            </a>

          </li>



          <li class="nav-header">Tools</li>


          <li class="nav-item">
            <a href="#"  >
      <form method="POST" action="{{ route('logout') }}" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
                            <!-- Authentication -->

                                @csrf

                                <p  class="text-gray-200" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Logout') }}
                            </p>


{{--
                                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-responsive-nav-link> --}}
                            </form>
                        </a>

            {{-- <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a> --}}


          </li>


        </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
