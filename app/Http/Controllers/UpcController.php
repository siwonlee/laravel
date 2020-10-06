<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upc;

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

    public function pending()
    {
        $upcs['upcs'] = Upc::where('verify',2)->orderby('verify_date','desc')->paginate(10) ;
        return view('temp')->with($upcs);
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
