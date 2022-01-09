<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class HomeController extends Controller
{
    public function index()
    {
        $shownews = news::all();
        return view('index', compact('shownews'));
    }
}
