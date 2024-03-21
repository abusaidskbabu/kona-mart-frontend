<?php

namespace App\Http\Controllers;

use App\Add;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::all();
        $ads = Add::first();
        $featured_products = Product::where('featured', 1)->where('is_active', 1)->get();
        return view('pages.home', compact('sliders', 'ads', 'featured_products'));
    }
}
