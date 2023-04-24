<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Auth;
class BlogController extends Controller
{
    
    
    public function Blog() {


       
          return view('blog.index');

    }

    public function show()
    {
        $blog = Blog::all();
        return response()->json($blog);
    }
 
    public function user()
    {
        dd(Auth::user());
    }



    public function update(Request $request , $id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());
        return response()->json('Blog Güncellendi');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return response()->json('Blog Silindi!');
    }

    public function store(Request $request)
    {

        //  $user_id = Auth::user()->id;
          
            $blog = new Blog([


                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'user_id' => $request->input('user_id'),

            ]);


                   
            $blog->save();
            return response()->json('Blog Created');
          
     
    }

}
