<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function portofolio()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        return view("portofolio", compact("posts"));
    }
}
