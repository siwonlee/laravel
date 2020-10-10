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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
