<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function create()
    {
    	return view('menu.add_menu');
    }

     public function save(Request $a)
    {
        $this->validate($a,[   
       "title"=>"required|max:50|min:3|", //rules
       "description"=>"required|max:10000|min:8|",
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
         $data = new Menu;
         $data->title = $a->title;
         $data->description = $a->description;
         $data->rate = $a->rate;
         $data->image = $filename;
         
         $data->save();
         if ($data) {
             # code...
            return redirect("admin/add_menu");
         }
    } 
}
