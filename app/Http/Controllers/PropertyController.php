<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
     public function index()
    {
      	 $data=DB::table('property_images')->where('category', '=', 'property1')
                ->orderBy('id','asc')->get();
        $request="property1";
        return view('property', compact('data', 'request'));
        return view('property');
    }
}
