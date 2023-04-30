<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

use Carbon\Carbon;
use DateTime;


use Auth;

class HomeComponent extends Component
{

    
  
   
    public function render()
    {
      
        $tmp = (new DateTime)->format('Y-m-d'); 
        
        Carbon::setLocale('tr');
        
        $blog = Blog::orderBy('created_at' , 'DESC')->where('date' ,  '<=' , $tmp)->get();
        return view('livewire.home-component' , ['blog' => $blog , 'tmp' => $tmp] )->layout('layouts.blog');
    }
}
