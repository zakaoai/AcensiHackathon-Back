<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{

    protected $fillable = [
        "libelle", "cout", "ordre"
    ];

    public $timestamps = false;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

}
