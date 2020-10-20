 


@extends('layouts.admin')

@section('content')
   
 
 

<div class="px-3  py-2">
    <div class="px-10 py-4  text-3xl inline"  > <i class="nav-icon fas fa-sync-alt  text-3xl" ></i> DATA for WOW/SOAR
        </div>
    </div>
 
 
 

<div class="p-4">

<table class="table  table-condensed" id="datatable" style="background-color:#fff;">
    <thead>
        <tr>


            <th>UPC</th>
            <th>Brand</th>
            <th>Short_desc</th>
            <th>Error</th>


        </tr>
    </thead>

<?
//dd($errors['error4']);

?>

 
 


 <?
$cnt=100 ;
$i=0;
?> 
@foreach($errs['error4'] as $data1 )

<?

 
$cnt=$cnt+1;
$i=$i+1;
?>
 
   @include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))

@endforeach


 
 
 

 </table>

 

<div>
 <?
 
 IF(count($errs)==0){
	 
	 ?>
	 
	 
	 
	 <div class="alert alert-success"align=center >Horray!<br> No incomplete DATA..</div>
	 
	 
	 
	 
	 <?
 }
 
 ?>

</div>
 
</div>





@endsection

 

