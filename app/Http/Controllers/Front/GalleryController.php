<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function gallery(){
        return view('front.layout.gallery');
    }
}
