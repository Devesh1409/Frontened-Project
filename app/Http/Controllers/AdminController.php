<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Reservation;
use App\Drink;
use App\Lunch;
use App\Dinner;
use App\Menu;
use App\Gallery;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
    	return view('admin.dashboard');
    }
    public function add_banner(Request $data)
    {
    	$data = banner::all();
    	return view('admin.banner.add_banner',compact('data'));
    }
    public function show($id)
    {
    	$data = Banner::find($id);
        return view('admin.show',compact('data'));
    }

    public function add_welcome(Request $data)
    {
        $data = reservation::all();
        return view('admin.reservation.add_welcome',compact('data'));
    }

    public function add_drink(Request $data)
    {
        $data = Drink::all();
        return view('admin.drink.add_drink',compact('data'));
    }

    public function add_lunch(Request $data)
    {
        $data = Lunch::all();
        return view('admin.lunch.add_lunch',compact('data'));
    }

    public function add_dinner(Request $data)
    {
        $data = Dinner::all();
        return view('admin.dinner.add_dinner',compact('data'));
    }

     public function add_menu(Request $data)
    {
        $data = Menu::all();
        return view('admin.menu.add_menu',compact('data'));
    }

     public function add_gallery(Request $data)
    {
        $data = Gallery::all();
        return view('admin.gallery.add_gallery',compact('data'));
    }


}
