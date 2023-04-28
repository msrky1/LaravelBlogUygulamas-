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

    public function show($id)
    {
 
   
        $user = User::find($id);

        $alluser= $user->blogs()->get();
    
        return response()->json($alluser);
       
     
    }
 

     public function allblog() {


        $allblog = Blog::orderBy('created_at' , 'DESC')->get();
        return response()->json( $allblog );
     }
    

    public function userdata()
    {
 
   
        
        $data  = auth::user();
        
  
        return response()->json($data);
       
     
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
           $date = $request->date;
           $user_id = auth::user()->id;
           $slug = Str::slug($title , '-');
           
      
          
           $blog = new Blog(); 
           
           $blog->title = $title;
           $blog->description = $description;
           $blog->date = $date;
           $blog->slug =  $slug;
           $blog->user_id = $user_id;
           
                   
            $blog->save();
            return response()->json('Blog Created');
          
     
    }

}
