<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
     public function index1()
    {
      	$data=DB::table('property_images')->where('category', '=', 'property1')->orderBy('id','asc')->get();
        return view('property1', compact('data', 'request'));
    }

     public function index2()
    {
      	$data=DB::table('property_images')->where('category', '=', 'property2')->orderBy('id','asc')->get();
        return view('property2', compact('data', 'request'));
    }

     public function index3()
    {
      	$data=DB::table('property_images')->where('category', '=', 'property3')->orderBy('id','asc')->get();
        return view('property3', compact('data', 'request'));
    }
}
