<?php

namespace App\Services\Card;

use App\Models\Card;
use App\Repositories\Card\CardGameRepository;
use App\Repositories\Card\CardRepository;

class CardGameService
{
    private CardGameRepository $cardGameRepository;

    public function __construct(CardGameRepository $cardGameRepository)
    {
        $this->cardGameRepository = $cardGameRepository;
    }

    public function findOrFail(string $id)
    {
        return $this->cardGameRepository->findOrFail($id);
    }

    public function all()
    {
        return $this->cardGameRepository->all();
    }

    public function allWith()
    {
        return $this->cardGameRepository->allWith();
    }

    public function create(array $attributes)
    {
        return $this->cardGameRepository->create($attributes);
    }

    public function findByGame(int $id)
    {

        $datas = $this->cardGameRepository->findByGame($id);
        $ordreIdeal = [];
        foreach ($datas as $value)
        {
            $ordreIdeal[] = $value["card_id"];
        }

        return [...$datas, "ordreIdeal" => $ordreIdeal];
    }
}
