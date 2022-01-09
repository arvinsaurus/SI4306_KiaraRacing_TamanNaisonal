<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class AboutController extends Controller
{
    public function index()
    {
        $shownews = news::all();
        return view('about', compact('shownews'));
    }
}
