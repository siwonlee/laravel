
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



<?

$c_approved = App\Models\Upc::where('verify',1)->count() ;
$c_pending = App\Models\Upc::where('verify',2)->count() ;
$c_denied = App\Models\Upc::where('verify',3)->count() ;
$c_a2 = App\Models\Upc::where('verify',1)->where('category',2)->count() ;
$c_a3 = App\Models\Upc::where('verify',1)->where('category',3)->count() ;
$c_a5 = App\Models\Upc::where('verify',1)->where('category',5)->count() ;
$c_a6 = App\Models\Upc::where('verify',1)->where('category',6)->count() ;
$c_a8 = App\Models\Upc::where('verify',1)->where('category',8)->count() ;
$c_a9 = App\Models\Upc::where('verify',1)->where('category',9)->count() ;
$c_a12 = App\Models\Upc::where('verify',1)->where('category',12)->count() ;
$c_a13 = App\Models\Upc::where('verify',1)->where('category',13)->count() ;
$c_a16 = App\Models\Upc::where('verify',1)->where('category',16)->count() ;
$c_a19 = App\Models\Upc::where('verify',1)->where('category',19)->count() ;
$c_a21 = App\Models\Upc::where('verify',1)->where('category',21)->count() ;
$c_a31 = App\Models\Upc::where('verify',1)->where('category',31)->count() ;
$c_a41 = App\Models\Upc::where('verify',1)->where('category',41)->count() ;
$c_a50 = App\Models\Upc::where('verify',1)->where('category',50)->count() ;
$c_a51 = App\Models\Upc::where('verify',1)->where('category',51)->count() ;
$c_a52 = App\Models\Upc::where('verify',1)->where('category',52)->count() ;
$c_a53 = App\Models\Upc::where('verify',1)->where('category',53)->count() ;
$c_a54 = App\Models\Upc::where('verify',1)->where('category',54)->count() ;




$error1 = DB::select("select * from apl_upc where verify like '1'  and (subcat_full = '' or subcat_full is NULL) ");
        $error2 = DB::select("select * from apl_upc where verify like '1'  and (category_full = '' or category_full is NULL)");
        $error3 = DB::select("select * from apl_upc where verify like '1'  and (verify_date = '' or verify_date is NULL)");
        $error4 = DB::select("select * from apl_upc where verify like '1'  and (end_date = '' or end_date is NULL)");
        $error5 = DB::select("select * from apl_upc where verify like '1'  and (benefit_qt = '' or benefit_qt is NULL)");
        $error6 = DB::select("select * from apl_upc where verify like '1'  and (plu_indicator = '' or plu_indicator is NULL) ");
        $error7 = DB::select("select * from apl_upc where verify like '1'  and (benefit_uom_wow = '' or benefit_uom_wow is NULL) ");
        $error8 = DB::select("select * from apl_upc where verify like '1'  and (short_desc = '' or short_desc is NULL) ");
        $error9 = DB::select("select * from apl_upc where verify like '1'  and (broadband_flag = '' or broadband_flag is NULL) ");
        $error10 = DB::select("select * from apl_upc where verify like '1'  and (brand = '' or brand is NULL) ");




        $error11 = DB::select("select * from apl_upc where verify like 1 and (length(upc) =  0 or length(upc) = 1 or length(upc)= 2 or length(upc) = 3 or 
        length(upc)=6 or length(upc)=  7 or length(upc)=9 or length(upc)=10 or length(upc)= 11 or length(upc)=14)" );
 
        $error12 = DB::select("select * from apl_upc where subcategory != right(subcat_full,1) and verify=1 and length(subcategory)=1" );
        $error13 = DB::select("select * from apl_upc where subcategory != right(subcat_full,2) and verify=1 and length(subcategory)=2" );
        $error14 = DB::select("select * from apl_upc where subcategory != right(subcat_full,3) and verify=1 and length(subcategory)=3" );

        $error15 = DB::select("select * from apl_upc where length(subcat_full) != 3 and verify=1" );
        $error16 = DB::select("select * from apl_upc where length(category_full) != 2 and verify=1" );
        $error17 = DB::select("select * from apl_upc where category != right(category_full,1) and verify=1 and length(category)=1" );
        $error18 = DB::select("select * from apl_upc where category != right(category_full,2) and verify=1 and length(category)=2" );

 //       $error19 = DB::select("select * from apl_upc where benefit_uom_wow = '' or and verify = '1'" ); error7과 동일
      //  $error20 = DB::select("Select * From up_indi Where verify=1   and moved != 1 " );
        $error21 = DB::select("select * from apl_upc where verify like '1'  and length(compare) !=13 " );
        $error22 = DB::select("select upc, count(*) from apl_upc group by upc having count(*) >1" );
        $error23 = DB::select("SELECT * from apl_upc where (CAST(subcat_full AS UNSIGNED) != subcategory) and verify=1 " );
        $error24 = DB::select("select * from apl_upc where verify like '1' and approved='yes' 
        and ( 
        
        
        (category = 2 and subcategory =0) or 
        (category = 2 and subcategory =1) or 
        (category = 2 and subcategory =2) or 
        (category = 2 and subcategory =3) or 
        (category = 2 and subcategory =5) or 
        (category = 3 and subcategory =0) or 
        (category = 3 and subcategory =1) or 
        (category = 5 and subcategory =0) or 
        (category = 5 and subcategory =1) or 
        (category = 5 and subcategory =2) or 
        (category = 8 and subcategory =0) or 
        (category = 8 and subcategory =1) or 
        (category = 8 and subcategory =2) or 
        (category = 8 and subcategory =3) or 
        (category = 9 and subcategory =0) or 
        (category = 9 and subcategory =1) or 
        (category = 9 and subcategory =201) or 
        (category = 12 and subcategory =0) or 
        (category = 12 and subcategory =1) or 
        (category = 12 and subcategory =2) or 
        (category = 12 and subcategory =201) or 
        (category = 12 and subcategory =202) or 
        (category = 13 and subcategory =0) or 
        (category = 13 and subcategory =1) or 
        (category = 13 and subcategory =2) or 
        (category = 13 and subcategory =201) or 
        (category = 16 and subcategory =0) or 
        (category = 16 and subcategory =1) or 
        (category = 16 and subcategory =2) or 
        (category = 16 and subcategory =3) or 
        (category = 16 and subcategory =7) or 
        (category = 16 and subcategory =8) or 
        (category = 19 and subcategory =0) or 
        (category = 19 and subcategory =1) or 
        (category = 19 and subcategory =2) or 
        (category = 19 and subcategory =3) or 
        (category = 51 and subcategory =0) or 
        (category = 51 and subcategory =2) or  
        (category = 53 and subcategory =0) or 
        (category = 53 and subcategory =1) or 
        (category = 54 and subcategory =0) or 
        (category = 54 and subcategory =2)  
        
        
        ) and (broadband_flag=0 or broadband_flag='') " );
        $error25 = DB::select(" select * from apl_upc where verify like '1' and approved='yes' 
        and ( 
        
        (category = 2 and subcategory =4) or 
        (category = 6 and subcategory =1) or 
        (category = 6 and subcategory =2) or 
        (category = 6 and subcategory =3) or 
        (category = 21) or 
        (category = 31) or 
        (category = 41) or 
        (category = 51 and subcategory =3) or 
        (category = 51 and subcategory =6) or  
        (category = 51 and subcategory =9) or 
        (category = 51 and subcategory =11) or  
        (category = 51 and subcategory =201) or 
        (category = 51 and subcategory =202) or
        (category = 52 and subcategory =4) or 
        (category = 52 and subcategory =6) or  
        (category = 52 and subcategory =9) or 
        (category = 52 and subcategory =11) or  
        (category = 52 and subcategory =12) or 
        (category = 52 and subcategory =14) or
        (category = 52 and subcategory =19) or 
        (category = 52 and subcategory =22) or  
        (category = 52 and subcategory =25) or 
        (category = 52 and subcategory =27) or  
        (category = 52 and subcategory =201) or 
        (category = 52 and subcategory =202) or
        (category = 52 and subcategory =203) or 
        (category = 52 and subcategory =204) or
        (category = 52 and subcategory =205) or 
        (category = 53 and subcategory =5)
        ) and (broadband_flag=1 or broadband_flag='')" );
        $error26 = DB::select("select * from apl_upc where verify like '1'  and (subcategory = '0' or subcategory = '' or subcategory = '000') " );
      $error27 = DB::select("select * from apl_upc where verify like '1'  and (apl_type !='9901' and apl_type !='9901,9902' and apl_type !='9901,9903') " );
 //       $error28 = DB::select("select * from apl_upc where verify like '1'  and char_length(upc_out)!='12' and char_length(upc_out)!='13' and char_length(upc_out)!='5' and char_length(upc_out)!='6' " );
 
 
    $errs = compact(
        'error1',
        'error1',
        'error2',
        'error3',
        'error4',
        'error5',
        'error6',
        'error7',
        'error8',
        'error9',
        'error10',
        'error11',
        'error12',
        'error13',
        'error14',
        'error15',
        'error16',
        'error17',
        'error18',
     //   'error19', error7과 동일
     //  'error20',
       'error21',
       'error22',
        'error23',
        'error24',
        'error25',
        'error26',
        'error27',
    //    'error28' 
        );
    


?>



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

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  > 
        
        
        
        @include('layouts.message')
        
        </a>
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



@include('layouts.avarta-icon')









      </li>


    </ul>





  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('recent_edit')}}" class="brand-link">
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
          <img class=" h-20 w-20 rounded-full object-cover border-4 border-gray-100" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
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
                Approved  <i class="fas fa-angle-left right"></i>
<span class="badge badge-success right">{{$c_approved}}</span>

              </p>
            </a>

            <ul class="nav nav-treeview">




            <li class="nav-item "><a href="{{route('approved')}}" class="nav-link">  <p>All <span class="badge badge-success right">{{$c_approved}} </span> </p>  </a> </li>
               <li class="nav-item"><a href="{{asset('approved/2')}}" class="nav-link"><p>02-Cheese or Tofu<span class="badge badge-success right">{{$c_a2}} </span> </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/3')}}" class="nav-link"><p>03-Eggs <span class="badge badge-success right">{{$c_a3}} </span> </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/5')}}" class="nav-link"><p>05-Breakfast Cereal <span class="badge badge-success right">{{$c_a5}} </span> </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/6')}}" class="nav-link"><p>06-Legumes <span class="badge badge-success right">{{$c_a6}} </span> </p> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/8')}}" class="nav-link"><p>08-Fish<span class="badge badge-success right">{{$c_a8}} </span>  </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/9')}}" class="nav-link"><p>09-Infant Cereal <span class="badge badge-success right">{{$c_a9}} </span> </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/12')}}" class="nav-link"><p>12-Infant Fruits & Vegetables<span class="badge badge-success right">{{$c_a12}} </span> </p>   </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/13')}}" class="nav-link"><p>13-Infant Meats<span class="badge badge-success right">{{$c_a13}} </span> </p>   </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/16')}}" class="nav-link"><p>16-Bread/Whole Grains <span class="badge badge-success right">{{$c_a16}} </span> </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/19')}}" class="nav-link"><p>19-Fruit & Vegetables Cash Value<span class="badge badge-success right">{{$c_a19}} </span>  </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/21')}}" class="nav-link"><p>21-Infant Formula(IF)<span class="badge badge-success right">{{$c_a21}} </span>  </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/31')}}" class="nav-link"><p>31-Exempt Infant Formula(EXF)<span class="badge badge-success right">{{$c_a31}} </span>  </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/41')}}" class="nav-link"><p>41-WIC Eligible Nutritionals<span class="badge badge-success right">{{$c_a41}} </span> </p>   </a> </li>

                 <li class="nav-item"><a href="{{asset('approved/50')}}" class="nav-link"> <p>50-Yogurt <span class="badge badge-success right">{{$c_a50}} </span> </p>  </a> </li>

                 <li class="nav-item"><a href="{{asset('approved/51')}}" class="nav-link"> <p>51-Milk-whole <span class="badge badge-success right">{{$c_a51}} </span> </p> </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/52')}}" class="nav-link"><p>52-Milk Low Fat/fat free<span class="badge badge-success right">{{$c_a52}} </span> </p>   </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/53')}}" class="nav-link"><p>53-Frozen Juice <span class="badge badge-success right">{{$c_a53}} </span> </p>  </a> </li>
                 <li class="nav-item"><a href="{{asset('approved/54')}}" class="nav-link"><p>54-Juice-64oz <span class="badge badge-success right">{{$c_a54}} </span> </p>   </a> </li>







              </ul>





          </li>




          <li class="nav-item has-treeview">
          <a href="{{route('pending')}}" class="nav-link @if( $segment == 'pending') active @endif">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Pending

              <span class="badge badge-warning right">{{$c_pending}}</span>
              </p>
            </a>


          </li>









          <li class="nav-item has-treeview">
            <a href="{{route('denied')}}" class="nav-link @if( $segment == 'denied') active @endif">
                <i class="nav-icon fas fa-thumbs-down"></i>
              <p>
                Denied
              <span class="badge badge-danger right">{{$c_denied}}</span>
              </p>
            </a>

          </li>



          <li class="nav-header">Tools</li>

{{-- add upc --}}

          <li class="nav-item has-treeview">
            <a href="{{route('add_upc')}}" class="nav-link @if( $segment == 'add_upc') active @endif">
                <i class="nav-icon fas fa-upload"></i>
              <p>
                Add UPC

              </p>
            </a>

          </li>

{{--  data for processor --}}


<?


$datacount= 0;
foreach($errs as $e){

  $datacount = $datacount + count($e);

 
}
 

?>

<li class="nav-item has-treeview">
  <a href="{{route('processor')}}" class="nav-link @if( $segment == 'data_for_p') active @endif">
      @if($datacount > 0)
      <i class="nav-icon fas fa-sync-alt fa-spin"></i>
      @else
      <i class="nav-icon fas fa-sync-alt"></i>
      @endif
      
      
    <p>
      DATA for WOW/SOAR
      <span class="badge badge-danger right">{{$datacount}}</span>
    </p>
  </a>

</li>



          
{{--  search --}}

<li class="nav-item has-treeview">
  <a href="{{route('search')}}" class="nav-link @if( $segment == 'search') active @endif">
      <i class="nav-icon fas fa-search"></i>
    <p>
      Search

    </p>
  </a>

</li>







{{-- check digit --}}

          <li class="nav-item has-treeview">
            <a href="{{route('check_digit')}}" class="nav-link @if( $segment == 'check_digit') active @endif">
                <i class="nav-icon fas fa-check"></i>
              <p>
                Check Digit

              </p>
            </a>

          </li>

 
{{-- Recent edit --}}

          <li class="nav-item has-treeview">
            <a href="{{route('recent_edit')}}" class="nav-link @if( $segment == 'recent_edit') active @endif">
                <i class="nav-icon fas fa-edit"></i>
              <p>
                Recent Edits

              </p>
            </a>

          </li>






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
