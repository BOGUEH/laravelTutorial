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

        $post = new Post();

        $post->title = 'title 4';
        $post->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, maxime.';
        $post->status = 1;
        $post->published_date = date('d-m-y');
        $post->User_ID = '10';
        $post->category_id = 22;
        $post->views = 200;

        $post->save();
    }
        // dd('lets check this');
}
