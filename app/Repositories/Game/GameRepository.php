<?php

namespace App\Repositories\Game;

use App\Models\Game;

class GameRepository
{
    private Game $entity;

    public function __construct()
    {
        $this->entity = app(Game::class);
    }

    public function findOrFail(int $id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }
}
