<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Like;


class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description' , 'slug'];



    public function comments(): HasMany 
    
    {

        return $this->hasMany(Comment::class);


    }
  
   
    public function user() {


            return $this->belongsTo(User::class);
    }

    public function likes() {


        return $this->hasMany(Like::class);

    }
}
