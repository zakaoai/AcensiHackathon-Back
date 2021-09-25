<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{

    protected $fillable = [
        "libelle", "niveau", "nb_sprints"
    ];

    public $timestamps = false;

    public function cards()
    {
        return $this->belongsToMany(Card::class);
    }

}
