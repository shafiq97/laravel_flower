<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function index()
    {
        $images = DB::table('images')->get();

        return view('images.index', ['images' => $images]);
    }
}
