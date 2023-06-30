<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $about = 'this is the about page';
    return view('about', compact('about'));
})->name('about');

Route::get('/home', function(){
    $blogs = [
                [
                    'title' => 'title one',
                    'body' => 'this part contain the body and more'
                ],
                [
                    'title' => 'title two',
                    'body' => 'this part contain the body and more'
                ],
                [
                    'title' => 'title three',
                    'body' => 'this part contain the body and more'
                ],
                [
                    'title' => 'title four',
                    'body' => 'this part contain the body and more'
                ]
        ];
    return view("home", compact('blogs'));
});
