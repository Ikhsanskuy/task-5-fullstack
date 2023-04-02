<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/posts',function ()
// {
//     dd('test api');
// });
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{id}',[PostController::class,'show']);
Route::get('/posts2/{id}',[PostController::class,'showdata']);

// protected $fillable = [
//     'title','blog_content','author'
// ];

// public function index(){
//     $posts = Post::all();
//     return response()->json(['database' => $posts]);
// }