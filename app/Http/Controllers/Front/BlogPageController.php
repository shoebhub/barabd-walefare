<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    //
    public function blogpage(){
        return view('front.layout.blog-page');
    }
}
