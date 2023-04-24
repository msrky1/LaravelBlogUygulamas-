<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class HomeComponent extends Component
{
    public function render()
    {

        // $blog = Blog::orderBy('DESC' , 'created_at');
        return view('livewire.home-component' );
    }
}
