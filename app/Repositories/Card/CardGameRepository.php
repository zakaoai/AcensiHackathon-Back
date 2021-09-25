<?php

namespace App\Repositories\Card;


use App\Models\CardGame;

class CardGameRepository
{
    private CardGame $entity;

    public function __construct()
    {
        $this->entity = app(CardGame::class);
    }

    public function findOrFail(string $id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }

    public function all()
    {
        return $this->entity->newQuery()->get();
    }

    public function create(array $attributes)
    {
        return $this->entity->newQuery()->create($attributes);
    }

    public function findByGame(int $id)
    {
        return $this->entity->newQuery()->where('game_id', '=', $id)->orderBy('priority')->get();
    }
}
