<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function portfolio(){
        $portfolios = Portfolio::all();
        return view('front.portfolio',compact('portfolios'));
    }
    public function galeries(){
        $galeries = Gallery::all();
        return view('front.galeries',compact('galeries'));
    }
    public function gallery(Gallery $gallery){
        $images = Image::where('gallery_id',$gallery->id)->get();
        return view('front.imagesgallery',compact('gallery','images'));
    }
}
