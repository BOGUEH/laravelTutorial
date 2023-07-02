<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        DB::table('posts')->insert([
            [
                'title' => "data test 1",
                'description'=> 'Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Minima dolorem soluta maiores nostrum
                                    molestiae excepturi natus at eligendi laudantium odit!',
                'status'=> 1,
                'published_date'=>   date('d-m-y'),
                'User_ID'=> 1,
            ],
            [
                'title' => "data test 2",
                'description'=> 'Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Minima dolorem soluta maiores nostrum
                                    molestiae excepturi natus at eligendi laudantium odit!',
                'status'=> 1,
                'published_date'=>   date('d-m-y'),
                'User_ID'=> 2,
            ],

            ]);
        dd('inserted successful');
    }
}
