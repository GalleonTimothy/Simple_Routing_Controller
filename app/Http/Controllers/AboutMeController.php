<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function showAboutMe()
    {
        return view('about_me');
    }
}
