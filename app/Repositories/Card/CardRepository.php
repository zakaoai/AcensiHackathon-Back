<?php

namespace App\Repositories\Card;

use App\Models\Card;

class CardRepository
{
    private Card $entity;

    public function __construct()
    {
        $this->entity = app(Card::class);
    }

    public function findOrFail(string $id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }

    public function all()
    {
        return $this->entity->newQuery()->get();
    }

    public function whereIn(array $ids)
    {
        return $this->entity->newQuery()->whereIn('id', $ids)->get();
    }

    public function create(array $attributes)
    {
        return $this->entity->newQuery()->create($attributes);
    }
}
