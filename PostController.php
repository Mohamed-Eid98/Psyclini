<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\Article;
use App\Models\Patient;
use App\Models\Secretary;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::with('patients')->get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
 
        if ($image = $request->file('post-pic')){
            $path = 'images/';
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$ext;
            $image->move($path , $imageName);
        }
     
     $post = new Post();
     $post->body = $request->input('comment');   
     $post->image = $imageName; 
     $post->speciality = $request->input('cate');   
     $post->save();
     return redirect()->route('home');
    }   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image)
        {
            unlink('images/'. $post->image);
        }
        $post->delete();
    }
}
