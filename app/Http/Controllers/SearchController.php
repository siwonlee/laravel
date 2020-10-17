<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upc;

class SearchController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

       
        return view('search')->with('upcs','') ;

    }
   
    

    public function general(Request $request)
    {

       
$upc = $request->input('upc');

$result = Upc::where('upc', $upc)->get();

return view('search')->with(['upcs'=>$result,'upc'=>$upc]);

       
        
    }


    
    public function edit(Request $request, $id)
    {
 

        $request->validate([
        
            'upc' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'short_desc' => 'required',
            'size' => 'required',
            'uom' => 'required',
            'high_cost' => 'required',
            'benefit_qt' => 'required',
            'benefit_uom' => 'required',
            'upc' => 'required',



        ]);

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
        $nutrition = $request->input('nutrition');
        $benefit_qt = $request->input('benefit_qt');
        
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
            'benefit_qt' => $benefit_qt,
           'comment'=>       $comment,
 

                 
                 ]);

                 $result = Ingredient::where('upc', $upc)->first();
               



                 if($result){

                 Ingredient::where('upc', $upc)
                 ->update([
    
                   'ingredients' => $ingredients,
                    'nutrition'=>$nutrition,
                       
                    ]);

                 }else{

                    Ingredient::create([
                        'id' => $id,
                        'upc' => $upc,
                      'ingredients' => $ingredients,
                       'nutrition'=>$nutrition,
                          
                       ]);



                 }




              return redirect()->back()->with('approved','The item( '.$upc.' ) has been updated.');

 

    }








}
