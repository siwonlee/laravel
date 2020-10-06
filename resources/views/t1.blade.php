<?php


//$upcs = App\Models\Upc::where('verify',2)->paginate(20) ;
$upcs = App\Models\User::find(2) ;





//dd($upcs->news)

foreach ($upcs->news as $news)

echo $news->title."-".$news->description."<hr>";

//


//$current = url()->current();
//echo $request->path();
//echo $current;

$segment = Request::segment(1);
echo $segment;
