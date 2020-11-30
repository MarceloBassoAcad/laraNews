<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Post;
use App\Question;

class HomeController extends Controller{
    
    public function index(){
        $posts = Post::where('active', 1)
                                ->orderBy('created_at', 'desc')
                                ->limit(3)
                                ->get();

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
