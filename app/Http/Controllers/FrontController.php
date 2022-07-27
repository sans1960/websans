<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    public function allPosts(){
        $posts = Post::all();
        return view('front.blog',compact('posts'));
    }
    public function viewPost(Post $post){
        return view('front.post',compact('post'));
    }


}
