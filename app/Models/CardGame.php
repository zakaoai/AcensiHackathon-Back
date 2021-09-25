<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardGame extends Model
{

    protected $fillable = [
        "game_id", "card_id"
    ];

    public $timestamps = false;

}
