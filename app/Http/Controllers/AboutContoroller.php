<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContoroller extends Controller
{
    public function about()
    {
        return view('articles.about');
    }
}
