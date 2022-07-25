<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('admin.images.create',compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->image->store('images','public');
        $image = new Image();
        $image->title = $request->title;
        $image->caption = $request->caption;
        $image->gallery_id = $request->gallery_id;
        $image->image = $request->image->hashName();
        $image->save();
        return redirect()->route('admin.images.index')->with('message','Image Created') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('admin.images.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $galleries = Gallery::all();
        return view('admin.images.edit',compact('image','galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        if($request->hasFile('image')){
            unlink(storage_path('app/public/images/'.$image->image));
            $request->image->store('images', 'public');
            $image->image = $request->image->hashName();
        }
        $image->title = $request->title;
        $image->caption = $request->caption;
        $image->gallery_id = $request->gallery_id;
        $image->update();
        return redirect()->route('admin.images.index')->with('message','Image updated') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        if(file_exists(storage_path('app/public/images/'.$image->image))){
            unlink(storage_path('app/public/images/'.$image->image));

        }
        $image->delete();
        return redirect()->route('admin.images.index')->with('message','Image Deleted');
    }
}
