<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Reservation;
use App\Drink;
use App\Lunch;
use App\Dinner;
use App\Gallery;
use App\Menu;

class FrontendController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Banner::all();
        $a = Reservation::all();
        $b = Menu::all();
        $c = Gallery::all();
        $d = Drink::all();
        $e = Lunch::all();
        $f = Dinner::all();
        return view('front.index',compact('data','a','d','e','f','b','c'));
    }

     public function menu()
    {
        $a = Reservation::all();
        $d = Drink::all();
        $e = Lunch::all();
        $f = Dinner::all();
        return view('front.menu',compact('a','d','e','f'));
    }

     public function about()
    {
    	return view('front.about');
    }

     public function gallery()
    {
        return view('front.gallery');
    }
}
