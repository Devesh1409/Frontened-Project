<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('drink.add_drink');
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
         $data = new Drink;
         $data->name = $a->name;
         $data->description = $a->description;
         $data->rate = $a->rate;
         $data->image = $filename;
         
         $data->save();
         if ($data) {
             # code...
            return redirect("admin/add_drink");
         }
    } 

    public function delete($id)
    {
        // echo $id;
        $data = Drink::find($id);
        $deleted = $data->delete();
        if ($deleted) 
        {
             return redirect('admin/add_drink')->with('message','Successfully Deleted');
        }
    }

       public function edit($id)
    {
        // echo "edit";
        $data = Drink::find($id);
        return view('admin.drink.edit',compact('data'));
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
         $data = Drink::find($a->id);
          $data->name = $a->name;
         $data->description = $a->description;
         $data->rate = $a->rate;
         $data->image = $filename;

         $data->save();
         if ($data) {
             return redirect('admin/add_drink');
         }
        }
        else{
            $data = Drink::find($a->id);
             $data->name = $a->name;
             $data->description = $a->description;
             $data->rate = $a->rate;
             
             $data->save();
              if ($data) {
             return redirect('admin/add_drink');
         }
        }
      
    } 
}
