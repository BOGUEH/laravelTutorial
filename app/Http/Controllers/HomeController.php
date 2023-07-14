<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Storage::delete('/image/new_image.jpg');
    //   File::delete(Storage_path('/app/public/image/new_image.jpg'));
    //   unlink::delete(Storage_path('/app/public/image/new_image.jpg'));
      return view('home');
    }

}
