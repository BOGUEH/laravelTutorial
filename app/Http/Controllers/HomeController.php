<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $posts = Post::all();

        foreach ($posts as $post) {
            echo $post->title;
        }
    }
        // dd('lets check this');
}
