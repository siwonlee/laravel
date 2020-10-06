<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $arr['categories'] = Category::all();
        return view('category')->with($arr);

    }



}
