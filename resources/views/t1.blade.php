<?
//    $data  = App\Models\Upc::where('upc', 'like', '111111111117')->get();
  

//  //  if(!$data){echo "no";}
//  //  if($data){echo "yes";}
// if(!count($data)){echo "no";}



 
      $output = '';
      $query = 111111111117;
 
 
      if($query != '' and  (strlen($query)==12 or strlen($query)==13 or strlen($query)==8 ))
      {
        if(strlen($query)==12){
            $upc_left2=substr($query,0,12);
            $b2 = str_split($upc_left2);
            $c2 = ($b2[0]+$b2[2]+$b2[4]+$b2[6]+$b2[8]+$b2[10])*3;
            $d2 = ($b2[1]+$b2[3]+$b2[5]+$b2[7]+$b2[9]);
            $e2 = $c2 + $d2;
            $f2 = $e2%10;
            $g2 = 10-$f2;
             if($g2==10){$g2=0;	}
            
             if($b2[11]==$g2){$cv = '1'; }else{$cv = '0';}
             
             }
             
            if(strlen($query)==13){
            $upc_left3=substr($query,0,13);
            $b3 = str_split($upc_left3);
            $c3 = ($b3[0]+$b3[2]+$b3[4]+$b3[6]+$b3[8]+$b3[10]);
            $d3 = ($b3[1]+$b3[3]+$b3[5]+$b3[7]+$b3[9]+$b3[11])*3;
            $e3 = $c3 + $d3;
            $f3 = $e3%10;
            $g3 = 10-$f3;
             if($g3==10){$g3=0;	 }
             
             if($b3[12]==$g3){$cv = '1'; }else{$cv = '0';}
             


             
             }
 

       $data = App\Models\Upc::where('upc', 'like', $query)->get();    
       
       if(count($data)  ){

          foreach($data as $d){

            $verify = $d->verify;
            $upc = $d->upc;
            $description = $d->description;
             }
      if($cv == '1'     and $verify == 1){$output = "<div class='alert alert-danger'> The upc (".$upc.") is alrealy in the APL.<br>Approved : ".$description."<br>No need to add it.</div>"; }
      if($cv == '1'    and $verify == 2){$output = "<div class='alert alert-danger'> The upc (".$upc.") is alrealy in the APL.<br>Pending : ".$description."<br>No need to add it.</div>"; }
      if($cv == '1'    and $verify == 3){$output = "<div class='alert alert-danger'> The upc (".$upc.") is alrealy in the APL.<br>Denied : ".$description."<br>No need to add it.</div>"; }    
 


       }else{

       
    if($cv == '1' )  { $output = "<div class='alert alert-success'> Please add it.</div>"; }     
    if($cv == '0'){ $output = "<div class='alert alert-danger'> It has a wrong check digit.</div>"; }
    
       }


    

      
      }else{

        $output = "<div class='alert alert-danger'> The upc length should be 8, 12 or 13 including a check digit at the end.</div>";


      }


echo $output;
