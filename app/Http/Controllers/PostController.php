<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{

    // public function index(){
    //     $posts = Post::all();
    //     return response()->json(['database' => $posts]);
    // }

    public function index(){
        $posts = Post::all();
        return PostResource::collection($posts);
    }

    // public function show($id){
    //     $post = Post::findOrFail($id);
    //     return new PostDetailResource($post);
    // }

    public function show($id){
        $post = Post::with('writer:id,username')->findOrFail($id);
        return new PostDetailResource($post);
    }

    public function showdata($id){
        $post = Post::findOrFail($id);
        return new PostDetailResource($post);
    }

}
