<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Like;
use Auth;
class BlogDetailComponent extends Component
{

    public $slug;
 
    public $like;
    public $blog_id;
    public $user_id;
     public $likeDurumu = 1;
    

    


    public function mount($slug ) {


        $this->$slug = $slug;

      
     
      
       
    }


  

   

    public function blogLike($id) {

             
        $like = new Like();

        $like->blog_id = $id;
        $like->user_id = auth::user()->id;
        $like->like = 1;

        $like->save();

        return redirect()->back();


   }
   public function deleteLike($id)

    {

        $this->likeDurumu = true;
        $like = Like::find($id);    
    
        $like->delete();
    
    
    
        

    }


    public function render()
    {

        Carbon::setLocale('tr');
        
    

        
        $blog = Blog::where('slug' , $this->slug)->with('user:id,name' , 'comments' , 'likes')->first();
 
        $userLike = Like::all();
        
     

        // dd($blog);
        return view('livewire.blog.blog-detail-component' , ['blog' => $blog , 'userLike' => $userLike ])->layout('layouts.blog');
    }
}
