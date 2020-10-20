<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upc;
use Illuminate\Support\Facades\DB;

class ProcessorController extends Controller
{
   
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {


        // $error1 = Upc::where('verify', 1)->where('subcat_full', '')->get();
        // $error2 = Upc::where('verify', 1)->where('category_full', '')->get();
        // $error3 = Upc::where('verify', 1)->where('verify_date', '')->get();
        // $error4 = Upc::where('verify', 1)->where('end_date', '')->get();
        // $error5 = Upc::where('verify', 1)->where('benefit_qt', '')->get();
        // $error6 = Upc::where('verify', 1)->where('plu_indicator', '')->get();
        // $error7 = Upc::where('verify', 1)->where('benefit_uom_wow', '')->get();
        // $error8 = Upc::where('verify', 1)->where('short_desc', '')->get();
        // $error9 = Upc::where('verify', 1)->where('broadband_flag', '')->get();
        // $error10 = Upc::where('verify', 1)->where('brand', '')->get();

        $error1 = DB::select("select * from apl_upc where verify like '1'  and subcat_full = '' ");
        $error2 = DB::select("select * from apl_upc where verify like '1'  and category_full = '' ");
        $error3 = DB::select("select * from apl_upc where verify like '1'  and verify_date = '' ");
        $error4 = DB::select("select * from apl_upc where verify like '1'  and end_date = '' ");
        $error5 = DB::select("select * from apl_upc where verify like '1'  and benefit_qt = '' ");
        $error6 = DB::select("select * from apl_upc where verify like '1'  and plu_indicator = '' ");
        $error7 = DB::select("select * from apl_upc where verify like '1'  and benefit_uom_wow = '' ");
        $error8 = DB::select("select * from apl_upc where verify like '1'  and short_desc = '' ");
        $error9 = DB::select("select * from apl_upc where verify like '1'  and broadband_flag = '' ");
        $error10 = DB::select("select * from apl_upc where verify like '1'  and brand = '' ");




        $error11 = DB::select("select * from apl_upc where verify like 1 and (length(upc) =  0 or length(upc) = 1 or length(upc)= 2 or length(upc) = 3 or 
        length(upc)=6 or length(upc)=  7 or length(upc)=9 or length(upc)=10 or length(upc)= 11 or length(upc)=14)" );
 
        $error12 = DB::select("select * from apl_upc where subcategory != right(subcat_full,1) and verify=1 and length(subcategory)=1" );
        $error13 = DB::select("select * from apl_upc where subcategory != right(subcat_full,2) and verify=1 and length(subcategory)=2" );
        $error14 = DB::select("select * from apl_upc where subcategory != right(subcat_full,3) and verify=1 and length(subcategory)=3" );

        $error15 = DB::select("select * from apl_upc where length(subcat_full) != 3 and verify=1" );
        $error16 = DB::select("select * from apl_upc where  length(category_full) != 2 and verify=1" );
        $error17 = DB::select("select * from apl_upc where category != right(category_full,1) and verify=1 and length(category)=1" );
        $error18 = DB::select("select * from apl_upc where category != right(category_full,2) and verify=1 and length(category)=2" );

        $error19 = DB::select("select * from apl_upc where benefit_uom_wow = '' and verify = '1'" );
      //  $error20 = DB::select("Select * From up_indi Where verify=1   and moved != 1 " );
        $error21 = DB::select("select * from apl_upc where verify like '1'  and length(compare) !=13 " );
        $error22 = DB::select(" select upc, count(*) from apl_upc group by upc having count(*) >1" );
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
        $error28 = DB::select("select * from apl_upc where verify like '1'  and char_length(upc_out)!='12' and char_length(upc_out)!='13' and char_length(upc_out)!='5' and char_length(upc_out)!='6' " );
 
// $errors = array(
//     $error1,
//     $error1,
//     $error2,
//     $error3,
//     $error4,
//     $error5,
//     $error6,
//     $error7,
//     $error8,
//     $error9,
//     $error10,
//     $error11,
//     $error12,
//     $error13,
//     $error14,
//     $error15,
//     $error16,
//     $error17,
//     $error18,
//     $error19,
//  //  $error20,
//     $error21,
//     $error22,
//     $error23,
//     $error24,
//     $error25,
//     $error26,
//     $error27,
//     $error28 
//     );
    $errors = compact(
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
        'error19',
     //  'error20',
        'error21',
        'error22',
        'error23',
        'error24',
        'error25',
        'error26',
        'error27',
        'error28' 
        );
    
    

        return view('processor')-> with('errs', $errors)   ;
//   return view('t1')-> with('errors', $errors)   ;

    }
   
    

    public function general(Request $request)
    {

       
$upc = $request->input('upc');

$result = Upc::search($request->get('upc'))->paginate(10);


// $result = Upc::where('upc', $upc)
//         ->orWhere('brand',$upc)
//         ->orWhere('description',$upc)
//         ->orWhere('short_desc',$upc)
//         ->orWhere('pic',$upc)
//         ->orWhere('pic1',$upc)
//         ->orWhere('pic2',$upc)
//         ->orWhere('benefit_uom_wow',$upc)->get();

return view('search')->with(['upcs'=>$result,'upc'=>$upc]);

       
        
    }


    
    public function edit(Request $request, $id)
    {
 
 
        $request->validate([
        
            'upc' => 'required',
            'category_full' => 'required',
            'subcat_full' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'short_desc' => 'required',
    
            'high_cost' => 'required',
            'benefit_qt' => 'required',
            'benefit_uom_wow' => 'required',
            'verify_date' => 'required',
         

        ]);

 
  


        $time = $request->input('time');
        $staff = $request->input('staff');
    
        $upc = $request->input('upc');          
        
      
  
  
        $verify_date = $request->input('verify_date');
        $category_full = $request->input('category_full');
        $subcat_full = $request->input('subcat_full');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $short_desc = $request->input('short_desc');
 
        $high_cost = $request->input('high_cost');
  
        $benefit_qt = $request->input('benefit_qt');
        
        $benefit_uom_wow = $request->input('benefit_uom_wow');
   
    
 
         $end_date=$request->input('end_date');
  
        $plu_indicator=$request->input('plu_indicator');
        $broadband_flag=$request->input('broadband_flag');
    
        $benefit_uom_wow = strtoupper($benefit_uom_wow);



        Upc::where('id', $id)
              ->update([
 
       
                 'edit_date'=>$time,
                 'edit_staff'=>$staff,
        
    
               'category_full'=>   $category_full,
            'subcat_full'=>     $subcat_full, 
               'brand'=>  $brand, 
              'description'=>    $description,
               'short_desc'=>   $short_desc,
               'long_desc'=>   $short_desc,
      
  
               'high_cost'=>   $high_cost,
            'benefit_uom_wow'=>    $benefit_uom_wow,
            'benefit_qt' => $benefit_qt,
           'end_date'=>       $end_date,
           'verify_date'=>       $verify_date, 
           'plu_indicator'=>$plu_indicator,
           'broadband_flag'=>$broadband_flag,
                 
                 ]);
 




              return redirect()->back()->with('approved','The item( '.$upc.' ) has been updated.');

 

    }



   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    //
}
