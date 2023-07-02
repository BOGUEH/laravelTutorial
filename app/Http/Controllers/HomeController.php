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
        $blogs = [
            [
                'title' => 'title one',
                'body' => 'this part contain the body and more',
                'status' => 1
            ],
            [
                'title' => 'title two',
                'body' => 'this part contain the body and more',
                'status' => 0
            ],
            [
                'title' => 'title three',
                'body' => 'this part contain the body and more',
                'status' => 1
            ],
            [
                'title' => 'title four',
                'body' => 'this part contain the body and more',
                'status' => 0
            ]
    ];

    return DB::table('posts')->where('id','>', '10')->where('id','<', '40')->get();

return view("home", compact('blogs'));
    }
}
