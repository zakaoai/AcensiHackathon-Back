<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = [
        "libelle", "cout", "ordre"
    ];

    public $timestamps = false;

}
