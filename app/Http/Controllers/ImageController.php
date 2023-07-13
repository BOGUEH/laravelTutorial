<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
        public function handleImage(Request $request)
    {
            return dd($request->file('image'));
    }
}
