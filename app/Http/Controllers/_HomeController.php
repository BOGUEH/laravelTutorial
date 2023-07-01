<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
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
return view("home", compact('blogs'));
    }
}
