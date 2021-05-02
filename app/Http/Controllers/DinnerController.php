<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dinner;

class DinnerController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('dinner.add_dinner');
    }

     public function save(Request $a)
    {
        $this->validate($a,[   
       "name"=>"required|max:50|min:3|", //rules
       "description"=>"required|max:10000|min:8|",
       "rate"=>"required",
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
         $data = new Dinner;
         $data->name = $a->name;
         $data->description = $a->description;
         $data->rate = $a->rate;
         $data->image = $filename;
         
         $data->save();
         if ($data) {
             # code...
            return redirect("admin/add_dinner");
         }
    } 

    public function delete($id)
    {
        // echo $id;
        $data = Dinner::find($id);
        $deleted = $data->delete();
        if ($deleted) 
        {
             return redirect('admin/add_dinner')->with('message','Successfully Deleted');
        }
    }
}
