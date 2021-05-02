<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
     public function create()
    {
    	return view('reservation.add_welcome');
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
         $data = new Reservation;
         $data->title = $a->title;
         $data->description = $a->description;
         $data->image = $filename;
         $data->thought = $a->thought;
         $data->thought_by = $a->thought_by;
         $data->save();
         // if ($data) {
         //     # code...
         //    return redirect("admin/add_welcome");
         // }
    }

     public function delete($id)
    {
        // echo $id;
        $data = Reservation::find($id);
        $deleted = $data->delete();
        if ($deleted) 
        {
             return redirect('admin/add_welcome')->with('message','Successfully Deleted');
        }
    }

     public function edit($id)
    {
        // echo "edit";
        $data = Reservation::find($id);
        return view('admin.reservation.edit',compact('data'));
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
         $data = Reservation::find($a->id);
         $data->title = $a->title;
         $data->description = $a->description;
         $data->thought = $a->thought;
         $data->thought_by = $a->thought_by;
         $data->image = $filename;

         $data->save();
         if ($data) {
             return redirect('admin/add_welcome');
         }
        }
        else{
            $data = Reservation::find($a->id);
             $data->title = $a->title;
             $data->description = $a->description;
             $data->thought = $a->thought;
             $data->thought_by = $a->thought_by;
             
             $data->save();
              if ($data) {
             return redirect('admin/add_welcome');
         }
        }
      
    } 
}
