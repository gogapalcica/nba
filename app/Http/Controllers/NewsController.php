<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

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
        $team = Team::with('news')->where('name',$name)->get()->first();
        $news = Team::where('name',$name)->first()->news()->with('teams')->latest()->paginate(5);

        $team = Team::where('name', $name)->first();

        return view('news.team.filter',compact('news','team'));
    }

    public function create()
    {
        $teams = Team::all();
        $news = News::with('teams')->get()->first();

        return view('news.create', compact('news','teams'));
    }

    public function store(StoreNewsRequest $request){

        $news= News::create(['content' => $request->content, 'title'=>$request->title, 'user_id' => auth()->user()->id]);

        $news->teams()->attach($request->team_id);

        return redirect('/news')->with('success','Hvala sto ste objavili na www.nba.com');

        return view('news.team.filter', compact('team'));

    }
}
