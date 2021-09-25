<?php

namespace App\Services\Card;

use App\Models\Card;
use App\Repositories\Card\CardGameRepository;
use App\Repositories\Card\CardRepository;

class CardGameService
{
    private CardGameRepository $cardGameRepository;
    private CardRepository $cardRepository;

    public function __construct(CardGameRepository $cardGameRepository, CardRepository $cardRepository)
    {
        $this->cardGameRepository = $cardGameRepository;
        $this->cardRepository = $cardRepository;
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
        //récupère les cards associées au game
        $cards =$this->cardRepository->whereIn($ordreIdeal);
        return [...$cards, "ordreIdeal" => $ordreIdeal];
    }
}
