<?php

namespace App\Http\Controllers;

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
}
