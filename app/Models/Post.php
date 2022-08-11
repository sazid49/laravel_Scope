<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function scopeActive($query){
        return $query->whereStatus(true);
    }

    public function scopePostDetail($query){
        return $query->with('user:id,name','categories:name');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
