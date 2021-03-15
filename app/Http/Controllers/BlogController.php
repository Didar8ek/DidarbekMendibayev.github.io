<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
      $post = Post::all();

      return view('blog.create')->with(['post'=>$post]);
    }
    public function store (Request $request){
    Post::create([
        'title'=>$request->title,
        'body'=>$request->body
    ]);
      return back();
    }
    public function get_client($id){
       $client = Post::find($id);
       if($client == null)
       return response(['message'=>'client not found'],404);

       return view('blog.detail')->with(['client' => $client]);
    }
}
