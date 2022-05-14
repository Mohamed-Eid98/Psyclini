<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\Article;
use App\Models\Patient;
use App\Models\Secretary;
use App\Models\postPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $posts = Post::latest()->with('patient')->Paginate(2);
        foreach($posts as $post){
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comments_count',$post->comments->count());
        }
     
        return view('html.blog', compact('posts'));
        // return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
{
    $text = $request->input('posts');
        $posts = Post::where(function ($q) use ($text){
            
            $q->where('body' , 'LIKE' , '%'.$text.'%');
        })->paginate(2);
        // $doctors = Doctor::where('rating' , "LIKE" , '%'.$rating.'%')->paginate(6);
        return view('html.blog', compact('posts'));    
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        if ($image = $request->file('post-pic')){
            $path = 'images/';
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$ext;
            $image->move($path , $imageName);
            $post->image = $imageName; 
        }
     
        
        $post->body = $request->input('comment');   
        $post->speciality = $request->input('cate');   
        $patientId = Auth::guard('patient')->user()->id ;
        $post->patient_id = $patientId;
        $post->save();
     return redirect()->route('blog');

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
