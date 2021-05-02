<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function create()
    {
    	return view('gallery.add_gallery');
    }

     public function save(Request $a)
    {
        $this->validate($a,[   
       
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
         $data = new Gallery;
         
         $data->image = $filename;
         $data->save();
         if ($data) {
             # code...
            return redirect("admin/add_gallery");
         }
    } 

     public function edit($id)
    {
        // echo "edit";
        $data = Gallery::find($id);
        return view('admin.gallery.edit',compact('data'));
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
         $data = Gallery::find($a->id);
         $data->image = $filename;
         $data->save();
         if ($data) {
             return redirect('admin/add_gallery');
         }
        }
        
      
    }

    public function delete($id)
    {
        // echo $id;
        $data = Gallery::find($id);
        $deleted = $data->delete();
        if ($deleted) 
        {
             return redirect('admin/add_gallery')->with('message','Successfully Deleted');
        }
    }
}
