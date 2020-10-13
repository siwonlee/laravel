<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upc;
use Carbon\Carbon;
use Auth;

 
class UpcController extends Controller
{





    public function __construct()
    {
        $this->middleware('auth');
    


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upcs = Upc::all();
        return view('temp')->with($arr);
        //return $arr;

    }

    public function approved()
    {
        $upcs['upcs'] = Upc::where('verify', 1) ->orderby('verify_date','desc')->paginate(10) ;

        return view('temp')->with($upcs);
        //return $arr;

    }

    public function approved_cate($cate)
    {
        //$this->cate = $cate;
        $upcs['upcs'] = Upc::where('verify', 1) -> where('category', $cate)->orderby('verify_date','desc')->paginate(10) ;

        return view('temp')->with($upcs);
        //return $arr;

    }
    public function pending_cate(Request $request)
    {
        $cate = $request->input('cate');
        $upcs['upcs'] = Upc::where('verify', 2) -> where('category', $cate)->orderby('verify_date','desc')->paginate(10) ;
        return view('temp')->with($upcs);
     }

     public function denied_cate(Request $request)
     {
         $cate = $request->input('cate');
         $upcs['upcs'] = Upc::where('verify', 3) -> where('category', $cate)->orderby('verify_date','desc')->paginate(10) ;
         return view('temp')->with($upcs);
      }
 



    public function approved_sub($cate,$sub)
    {
        //$this->cate = $cate;
        $upcs['upcs'] = Upc::where('verify', 1) -> where('category', $cate)
        ->where('subcategory',$sub)
        ->orderby('verify_date','desc')->paginate(10) ;

        return view('temp')->with($upcs);
        //return $arr;

    }


   

    public function pending()
    {
        $cate = 1;
        $upcs['upcs'] = Upc::where('verify',2)->orderby('verify_date','desc')->paginate(10) ;
        return view('temp')->with($upcs)->with($cate);
        //return $arr;

    }

    public function denied()
    {
        $upcs['upcs'] = Upc::where('verify', 3)->orderby('verify_date','desc')->paginate(10) ;
        return view('temp')->with($upcs);
        //return $arr;

    }
    public function recent_edit()
    {
        $upcs['upcs'] = Upc::where('edit_date','!=' ,'')->orderby('edit_date','desc')->paginate(10) ;
        return view('temp')->with($upcs);
        //return $arr;

    }

    public function make_pending($id)
    {
        Upc::where('id', $id)
              ->update(['verify' => 2,'approved'=>'Pending']);

              return redirect()->back()->with('pending','The item has been pended for a future review.');

        //return $arr;

    }


    public function make_denied(Request $request, $id)
    {


        $comment = $request->input('comment');
        $time = $request->input('time');
        $staff = $request->input('staff');
        $upc = $request->input('upc');

        Upc::where('id', $id)
              ->update([
                 'verify' => 3,
                 'approved'=>'no',
                 'comment'=>$comment,
                 'verify_date'=>$time,
                 'verify_staff'=>$staff,
                 'edit_date'=>$time,
                 'edit_staff'=>$staff,
                 ]);

              return redirect()->back()->with('deny','The item( '.$upc.' ) has been denied.');

        //return $arr;

    }

  public function make_approved($id)
    {
        $time = Carbon::now()->format('Y-m-d');
        $staff = Auth::user()->name;
        $upc = Upc::find($id)->upc;
        Upc::where('id', $id)
              ->update([
                  'verify' => 1,
                  'approved'=>'Yes',
 
                  'verify_date'=>$time,
                  'verify_staff'=>$staff,
 
                  'edit_staff'=>$staff                
                  
                  
                  
                  
                  ]);

              return redirect()->back()->with('approved','The item( '.$upc.' ) has been approved.');;
 
        //return $arr;

    }


    public function edit(Request $request, $id)
    {
 
        $time = $request->input('time');
        $staff = $request->input('staff');
        $verify = $request->input('verify');     
        $upc = $request->input('upc');          
        

        $image = $request->input('image');        
        $approved = $request->input('approved');
        $verify_staff = $request->input('verify_staff');
 
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $short_desc = $request->input('short_desc');
        $size = $request->input('size');
        $uom = $request->input('uom');
        $high_cost = $request->input('high_cost');
        $ingredients = $request->input('ingredients');
        $benefit_uom = $request->input('benefit_uom');
        $comment = $request->input('comment');
    
 


        Upc::where('id', $id)
              ->update([
 
                'verify' => $verify,
                 'edit_date'=>$time,
                 'edit_staff'=>$staff,
                 'image'=>  $image,       
                 'approved'=> $approved,
               'category'=>   $category,
            'subcategory'=>     $subcategory, 
               'brand'=>  $brand, 
              'description'=>    $description,
               'short_desc'=>   $short_desc,
               'size'=>   $size,
               'uom'=>   $uom,
               'high_cost'=>   $high_cost,
            'benefit_uom'=>    $benefit_uom,
           'comment'=>       $comment,
 

                 
                 ]);

              return redirect()->back()->with('deny','The item( '.$upc.' ) has been updated.');

        //return $arr;

    }

    public function detail($id)
    {
        $upcs['upcs']= Upc::where('id', $id)->get();

     
   
              return view('detail')->with($upcs);

        //return $arr;

    }
    

    public function add_upc()
    {
    
   
              return view('add_upc');
 
    }
    
    
    public function add_upc_post(Request $request)
    {
 
        $time = $request->input('time');
        $staff = $request->input('staff');
        $verify = $request->input('verify');     
        $upc = $request->input('upc');          
        

        $image = $request->input('image');        
        $approved = $request->input('approved');
        $verify_staff = $request->input('verify_staff');
 
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $short_desc = $request->input('short_desc');
        $size = $request->input('size');
        $uom = $request->input('uom');
        $high_cost = $request->input('high_cost');
        $ingredients = $request->input('ingredients');
        $benefit_uom = $request->input('benefit_uom');
        $comment = $request->input('comment');
    
 


        Upc::where('id', $id)
              ->update([
 
                'verify' => $verify,
                 'edit_date'=>$time,
                 'edit_staff'=>$staff,
                 'image'=>  $image,       
                 'approved'=> $approved,
               'category'=>   $category,
            'subcategory'=>     $subcategory, 
               'brand'=>  $brand, 
              'description'=>    $description,
               'short_desc'=>   $short_desc,
               'size'=>   $size,
               'uom'=>   $uom,
               'high_cost'=>   $high_cost,
            'benefit_uom'=>    $benefit_uom,
           'comment'=>       $comment,
 

                 
                 ]);

              return redirect()->back()->with('deny','The item( '.$upc.' ) has been updated.');

        //return $arr;

    }
    
 
    
    function  status(Request $request)
    {
        
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');

 
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
 

       $data = Upc::where('upc', 'like', $query)->get();    
       
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



 
   }


 
    

   
      return $data = array(
       'table_data'  => $output
 
        );

     // echo json_encode($data);
     }
 

     public function subcategory()
     {
         //
     }
 

 






    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
