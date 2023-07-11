<?php

namespace App\Http\Controllers;

use App\Models\category;
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
            // $category = category::class;
        // $post = Post::find(52);
        // $post->title = 'the is a new title';

       DB::table('categories')->insert([
        'News' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ratione.',
        'Education'=> 'Lorem, ipsum dolor.',
        'Tech' => 'beuttive techa work oohgo'

        ]);
        dd('successful');
    }

}
