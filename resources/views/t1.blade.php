<?
   $data  = App\Models\Upc::where('upc', 'like', '025484000124')->get();

   foreach($data as $d){

$d =  $d->verify;


   }

   echo $d;