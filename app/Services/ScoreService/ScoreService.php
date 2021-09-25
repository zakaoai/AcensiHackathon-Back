<?php

namespace App\Services\ScoreService;


use App\Repositories\Game\GameRepository;

class ScoreService
{
    const part_sprint = 25;
    const part_order = 75;


    function calcScore($datas)
    {
        $gr = new GameRepository();
        $game = $gr->findOrFail($datas["game_id"]);
        $nb_sprints = $game['nb_sprints'];
        $sprints_player = count($datas["sprintsPlayer"]);
        $sprintsPts = self::part_sprint - (($sprints_player - $nb_sprints) * 5);

        $flat_player_choices = [];
        $ordreIdeal = $datas["ordreIdeal"];
        foreach ($datas["sprintsPlayer"] as $sprint)
        {
            $flat_player_choices = [...$flat_player_choices, ...array_values($sprint)];
        }
        $ordreJoueur = $flat_player_choices;
        $ordreIdeal = (count($ordreIdeal) === count($flat_player_choices)) ? $ordreIdeal : array_slice($datas["ordreIdeal"],0,-(count($ordreIdeal) - count($flat_player_choices)));
        $ordreIdeal;
        $percent = $this->eucDistance($ordreJoueur, $ordreIdeal);
        //TODO Trouver un moyen de determiner de combien est la max eucDistance pour faire un pourcentage à soustraire
        return $sprintsPts + (75 - ((75 * $percent) / 100));
    }

    function eucDistance(array $a, array $b) {
        return
        array_sum(
            array_map(
                function($x, $y) {
                    return abs($x - $y) ** 2;
                }, $a, $b
            )
        ) ** (1/2);
    }

}
