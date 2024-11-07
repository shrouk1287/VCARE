<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function create(){
        return view('admin.majors.create');
    }
    public function store(){
        // if(request()->filled('name')){
        //   dd('kk');
        // }
        // $data = request()->only('name');
        // dd($data);
        request()->validate(
     [
       "name"=>"required|string|min:3|max:50",
       "image"=>["required", "image"],
     ]
        );
        // dd(request()->image);
        // $image_ext = request()->image->extension();
        $image_name= request()->image->getClientOriginalName();
        $image_name =time().rand(1,10000).'_'.$image_name;
        request()->image->move(public_path('uploads/majors/'), $image_name);

      Major::create([
        'name'=>request()->name,
        'image'=>$image_name,
      ]);
      return back()->with('success', 'Data Added Successmfully');
    }
}
