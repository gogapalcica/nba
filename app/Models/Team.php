<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Team extends Model
{
    use HasFactory;


    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function addComment($content) {
        return Comment::create($content);
    }
}
