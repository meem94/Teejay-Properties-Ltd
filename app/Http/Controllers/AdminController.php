<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function index1()
    {
        $data1=DB::table('property_images')->where('category', '=', 'property1')
                                   ->orderBy('id','asc')
                                   ->get();
        $request="property1";
        return view('admin', compact('data1', 'request'));
    }

    public function index2()
    {
        $data1=DB::table('property_images')->where('category', '=', 'property1')
                                   ->orderBy('id','asc')
                                   ->get();
        $request="property1";
        return view('admin', compact('data1', 'request'));
    }

    public function index3()
    {
        $data1=DB::table('property_images')->where('category', '=', 'property2')
                                   ->orderBy('id','asc')
                                   ->get();
        $request="property2";
        return view('admin', compact('data1', 'request'));
    }

    public function index4()
    {
        $data1=DB::table('property_images')->where('category', '=', 'property3')
                                   ->orderBy('id','asc')
                                   ->get();
        $request="property3";
        return view('admin', compact('data1', 'request'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'file_name' => '
            required|max:10240|mimes:gif,jpeg,png,jpg,']);
        $tit1=$request->title;
        $file= $request->file('file');
        $extension = $request->file('file')->getClientOriginalExtension();
       return $request;

        if($file = $request->hasFile('file')) {
            $file = $request->file('file') ;
            $fileName = $file->getClientOriginalName() ;
            echo $fileName;
            $folder=$request->semester;
            $destinationPath = public_path().'/'.$folder.'/';
            $file->move($destinationPath,$fileName);
        }
        $property_img = new Property_image;
        $property_img->header = $tit1;
        $property_img->details = $request->detail; 
        $property_img->file_path = $fileName;
        $property_img->category = $request->property;
        $property_img->hover = "0";
        
        $property_img->save();

        $request->session()->flash('alert-success', 'Image is added succesfully!');
        $request = $request->property;
        if($request=="property1") return redirect()->action('AdminController@index2');
        else if($request=="property2") return redirect()->action('AdminController@index3');
        else if($request=="property3") return redirect()->action('AdminController@index4');
    }
}
