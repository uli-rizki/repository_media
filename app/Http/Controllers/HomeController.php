<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Media;

class HomeController extends Controller
{
    public function index()
    {
        $media = Media::get();

        return response()->json($media);
    }
}
