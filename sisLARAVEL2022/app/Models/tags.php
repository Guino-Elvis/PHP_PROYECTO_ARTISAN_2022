<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;


    //relacion inversaaa

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
