<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;


class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('banner.add_banner');
    }

     public function save(Request $a)
    {
        $this->validate($a,[   
       "title"=>"required|max:50|min:3|", //rules
       "description"=>"required|max:100|min:8|",
       "image"=>"required",
       

        ]);
      // echo '<pre>';
      // print_r($a->file('image'));
      $file = $a->file('image');
      // dd($file);//dump and die
      // exit;
      $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;
       $file->move("upload/",$filename);
         //dd($file);
         //exit;
         $data = new Banner;
         $data->title = $a->title;
         $data->description = $a->description;
         $data->image = $filename;
         $data->save();
         if ($data) {
             # code...
            return redirect("admin/add_banner");
         }
    } 

    public function delete($id)
    {
        // echo $id;
        $data = Banner::find($id);
        $deleted = $data->delete();
        if ($deleted) 
        {
             return redirect('admin/add_banner')->with('message','Successfully Deleted');
        }
    }

     public function edit($id)
    {
        // echo "edit";
        $data = Banner::find($id);
        return view('admin.banner.edit',compact('data'));
    }

    public function update(Request $a)
    {
        // echo "<pre>";
        // print_r($a->all()); // hasFile check karta hai ki image ai hai ya ni
        if ($a->hasFile('image')) {
            $file = $a->file('image');
        // dd($file);//dump and die
        // exit;
        $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;
         $file->move("upload/",$filename);
         //dd($file);
         //exit;
         $data = Banner::find($a->id);
         $data->title = $a->title;
         $data->description = $a->description;
         $data->image = $filename;
         $data->save();
         if ($data) {
             return redirect('admin/add_banner');
         }
        }
        else{
             $data = Banner::find($a->id);
             $data->title = $a->title;
             $data->description = $a->description;
             
             $data->save();
              if ($data) {
             return redirect('admin/add_banner');
         }
        }
      
    }
}
