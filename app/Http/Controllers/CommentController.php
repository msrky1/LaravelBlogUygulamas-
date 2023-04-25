<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;


class CommentController extends Controller
{
 
     public function comment(Request $request) {

        $blog_id = $request->blog_id;
        $body = $request->body;
     
        $user_id = auth::user()->id;
   
        
   
       
        $comment = new Comment(); 
        
        $comment->blog_id = $blog_id;
        $comment->body = $body;
      
        $comment->user_id = $user_id;

        $comment->save();

        return redirect()->back();
         


     }
}
