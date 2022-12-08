<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use Illuminate\Http\Request;
use App\Models\Team;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(StoreCommentRequest $request, $id)
    {
        $validated = $request->validated();

        $team = Team::find($id);

        $team->addComment(['content' => $validated['content'], 'user_id' => auth()->user()->id,'team_id'=> $team->id]);

        return redirect()->back();
    }
}
