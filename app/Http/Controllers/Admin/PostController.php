<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.posts.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->image->store('posts', 'public');
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->image = $request->image->hashName();
        $post->body = $request->body;
        $post->link = $request->link;
        $post->tag_id = $request->tag_id;
        $post->save();
        return redirect()->route('admin.posts.index')->with('message','Post Created') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        return view('admin.posts.edit',compact('tags','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($request->hasFile('image')){
            unlink(storage_path('app/public/posts/'.$post->image));
            $request->image->store('posts', 'public');
            $post->image = $request->image->hashName();
        }
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);

        $post->body = $request->body;
        $post->link = $request->link;
        $post->tag_id = $request->tag_id;
        $post->update();
        return redirect()->route('admin.posts.index')->with('message','Post Updated') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(file_exists(storage_path('app/public/posts/'.$post->image))){
            unlink(storage_path('app/public/posts/'.$post->image));

        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('message','Post Deleted');
    }
}
