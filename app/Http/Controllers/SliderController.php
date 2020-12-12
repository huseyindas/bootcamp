<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function showSliders(){
        $sliders = Slider::all();
        return view("tables.sliders", compact("sliders"));
    }
}
