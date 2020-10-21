<?

dd($errs );

// dd($errors);
  foreach($errs as $e){

echo count($e)."<br>";

if(count($e)>0){

    $cnt = 0;
    foreach($e as $ea){

        echo $e[$cnt]->upc."<br>";
$cnt = $cnt+1;
    }
//print_r($e[0]->upc);
echo "<br><br>";

}


 }

?>