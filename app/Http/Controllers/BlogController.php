<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;
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

      
           $title = $request->title;
           $description = $request->description;
           $user_id = auth::user()->id;
           $slug = Str::slug($title , '-');
           
      
          
           $blog = new Blog(); 
           
           $blog->title = $title;
           $blog->description = $description;
           $blog->slug =  $slug;
           $blog->user_id = $user_id;
           
                   
            $blog->save();
            return response()->json('Blog Created');
          
     
    }

}
