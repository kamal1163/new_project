<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   function index(){
    $allposts = Post::select('posts.*','users.name')->join('users','posts.user_id','users.id')->orderBy('posts.id','DESC')->get();
    return view('post.post',compact('allposts'));
   }
   public function view_post()
   {
    return view('post.create-post');
   }
   public function store_post(Request $request)
   {
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);
    $post = storePost([
        'title' => $request->title,
        'body' => $request->body  
    ]);
      return redirect('/')->with('success', 'Post created successfully!');
   }
   public function edit_post($id)
    {
      $data = Post::find($id);
      return view('post.edit-post',compact('data'));
    }
   public function update_post(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $data = Post::find($id);
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return redirect('/')->with('success', 'Post updated successfully!');
    }
    public function delete_post(Request $request,$id)
    {
        $data = Post::find($id);
       if(!is_null( $data)){
        $data->delete();
       }
        return redirect('/')->with('success', 'Post created successfully!');
    }
}
