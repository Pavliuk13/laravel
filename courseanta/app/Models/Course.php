<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function customers(){
        return $this->belongsToMany(User::class, 'user_course');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
