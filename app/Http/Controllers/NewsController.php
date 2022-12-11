<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::find($id);
        $news = News::with('teams')->find($id);

        return view('news.show',compact('news'));
    }

    public function filter($name)
    {
        $tean = Team::with('news')->where('name',$name)->get()->first();

        return view('news.team.filter',compact('team'));
    }

    public function create()
    {
        $news = News::with('teams')->get()->first();

        return view('news.create', compact('news'));
    }
}
