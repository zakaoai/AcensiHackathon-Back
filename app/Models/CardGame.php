<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardGame extends Model
{

    protected $table = 'card_game';

    protected $fillable = [
        "game_id", "card_id", "priority", "sprint"
    ];

    public $timestamps = false;

}
