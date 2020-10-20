 


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
<tbody>



 <? $cnt=100 ; $i=0;
?> 
@foreach($errs['error1'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=200 ; $i=0;
?> 
@foreach($errs['error2'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=300 ; $i=0;
?> 
@foreach($errs['error3'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=400 ; $i=0;
?> 
@foreach($errs['error4'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=500 ; $i=0;
?> 
@foreach($errs['error5'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=600 ; $i=0;
?> 
@foreach($errs['error6'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

 
<? $cnt=700 ; $i=0;
?> 
@foreach($errs['error7'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=800 ; $i=0;
?> 
@foreach($errs['error8'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=900 ; $i=0;
?> 
@foreach($errs['error9'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=1000 ; $i=0;
?> 
@foreach($errs['error10'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=1100 ; $i=0;
?> 
@foreach($errs['error11'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=1200 ; $i=0;
?> 
@foreach($errs['error12'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=1300 ; $i=0;
?> 
@foreach($errs['error13'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

<? $cnt=1400 ; $i=0;
?> 
@foreach($errs['error14'] as $data1 )
<?
$cnt=$cnt+1; $i=$i+1;
?>
@include('layouts.modal_indi_incomplete', compact('data1','cnt','i'))
@endforeach

  
 
 
 
</tbody>
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

 

