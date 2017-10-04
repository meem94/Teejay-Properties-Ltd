<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Property_image;
use Image;
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
            'file' => '
            required|max:10240|mimes:gif,jpeg,png,jpg,']);
        $tit1=$request->title;
        $file= $request->file('file');
       $extension = $request->file('file')->getClientOriginalExtension();
       /*return $request;*/
  
        $fileName = $tit1.'.'.$extension;
        //echo $fileName;
        $folder=$request->property;
        $destinationPath = public_path('/img/'.$folder.'/');
        Image::make($file->getRealPath())->resize(800, 600)->save( $destinationPath.'/'.$fileName);
        
        $property_img = new Property_image;
        $property_img->header = $tit1;
        $property_img->details = $request->detail; 
        $property_img->file_path = $fileName;
        $property_img->category = $request->property;
        $property_img->hover = $request->hover1;
        
        $property_img->save();
        
        $request->session()->flash('alert-success', 'Image is added succesfully!');
        $request = $request->property;
        if($request=="property1") return redirect()->action('AdminController@index2');
        else if($request=="property2") return redirect()->action('AdminController@index3');
        else if($request=="property3") return redirect()->action('AdminController@index4');
    }

    public function delete(Request $request)
    {
        $data = Property_image::find($request->rid);
        $data->delete();
        
    	
        $folder=$request->property;
        $destinationPath = public_path().'/img/'.$folder.'/';
        $destinationPath = $destinationPath.$request->filepath;
        \File::delete($destinationPath);

        $request->session()->flash('alert-success', 'Image is deleted succesfully!');
        $request = $request->property;
        if($request=="property1") return redirect()->action('AdminController@index2');
        else if($request=="property2") return redirect()->action('AdminController@index3');
        else if($request=="property3") return redirect()->action('AdminController@index4');
    }

    public function update(Request $request)
    {
        $edit_pic = Property_image::find($request->rid);
        $edit_pic->header = $request->edit_title;
        $edit_pic->details = $request->edit_detail;
        $edit_pic->category = $request->property;
        $edit_pic->hover = $request->edit_hover;
        $edit_pic->save();
        
        $request->session()->flash('alert-success', 'Image detail is updated succesfully!');
        $request = $request->property;
        if($request=="property1") return redirect()->action('AdminController@index2');
        else if($request=="property2") return redirect()->action('AdminController@index3');
        else if($request=="property3") return redirect()->action('AdminController@index4');
    }
}
