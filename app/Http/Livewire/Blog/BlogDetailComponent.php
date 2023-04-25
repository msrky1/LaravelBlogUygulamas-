<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
class BlogDetailComponent extends Component
{

    public $slug;
 

 
    


    public function mount($slug) {


        $this->$slug = $slug;
     
      
       
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
