<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Http\Resources\AllPostsCollection;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return Inertia::render('home', [
            'posts' => new AllPostsCollection($posts),
            'allUsers' => User::all()
        ]);
    }
}
