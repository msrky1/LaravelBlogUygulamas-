<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

use Carbon\Carbon;
use Auth;

class HomeComponent extends Component
{

    
  
   
    public function render()
    {
        Carbon::setLocale('tr');
        $blog = Blog::orderBy('created_at' , 'ASC')->get();
        return view('livewire.home-component' , ['blog' => $blog] )->layout('layouts.blog');
    }
}
