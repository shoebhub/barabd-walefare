<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreasofgivingController extends Controller
{
    //
    public function areas_of_giving(){
        return view('front.layout.areas_of_giving');
    }
}
