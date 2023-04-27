<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Like;
class BlogDetailComponent extends Component
{

    public $slug;
 
    public $like;
    public $blog_id;
    public $user_id;
 
    


    public function mount($slug ) {


        $this->$slug = $slug;

      
     
      
       
    }


   

   

    public function blogLike() {

             
        $like = new Like();

        $like->blog_id = blog_id;
        $like->user_id = auth::user()->id;
        $like->like = 1;

        $like->save();

        return redirect()->back();


   }


    public function render()
    {

        Carbon::setLocale('tr');
        
    //  $comments = Blog::find(53)->comments;

        
        $blog = Blog::where('slug' , $this->slug)->with('user:id,name' , 'comments')->first();

    

        //  dd($blog);
        return view('livewire.blog.blog-detail-component' , ['blog' => $blog ])->layout('layouts.blog');
    }
}
