<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news', compact('news'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make(
            $request->all(),
            [
                'judul' => 'required',
                'gambar' => 'required',
                'url' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('code', 4);
        }

        $news = new News();
        $news->judul = $request->judul;
        $news->gambar = $request->gambar;
        $news->url = $request->url;

        $save = $news->save();

        if ($save) {
            return redirect()->route('admin.news');
        }
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->back();
    }
}
