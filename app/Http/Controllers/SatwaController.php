<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class SatwaController extends Controller
{
    public function index()
    {
        $shownews = News::all();
        return view('satwa', compact('shownews'));
    }
}
