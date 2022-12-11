<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'team_id','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::find($this->user_id));
    }

    public function teams(){
        return $this->belongsToMany(Team::class, 'news_teams');
    }
}
