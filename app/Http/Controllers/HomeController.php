<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    $posts = Post::active()
                 ->with('user:id,name','categories:name')
                 ->get();
    dd($posts->toArray());

    }
}
