<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about_us()
    {
        $title = 'Sobre Nós';
        return view('site.about-us', compact('title'));
    }
}
