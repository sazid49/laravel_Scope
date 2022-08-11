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
                 ->postdetail()
                 ->get();
    dd($posts->toArray());

    }
}
