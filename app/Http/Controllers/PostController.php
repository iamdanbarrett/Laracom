<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
    	 $postBody = $request->input('postBody');
		
		 Post::create([
		 	'postBody' => $postBody,
		 	'user_id' => Auth::user()->id,
		 ]);  

         return view('index', array('user' => Auth::user()) );
    }


    public function getPosts()
    {
        //$posts = DB::table('posts')->get();
        $posts = Post::all();
        return view('index', array('user' => Auth::user(), 'posts' => $posts) );
    }

}
