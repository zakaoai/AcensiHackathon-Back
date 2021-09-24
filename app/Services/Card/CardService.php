<?php

namespace App\Services\Card;

use App\Models\Card;
use App\Repositories\Card\CardRepository;

class CardService
{
    private CardRepository $cardRepository;

    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    public function findOrFail(string $id)
    {
        return $this->cardRepository->findOrFail($id);
    }

    public function all()
    {
        return $this->cardRepository->all();
    }

    public function allWith()
    {
        return $this->cardRepository->allWith();
    }

    public function create(array $attributes)
    {
        return $this->cardRepository->create($attributes);
    }
}
