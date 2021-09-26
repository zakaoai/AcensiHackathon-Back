<?php

namespace App\Services\ScoreService;


use App\Repositories\Game\GameRepository;

class ScoreService
{
    const part_sprint = 40;
    const part_order = 60;


    function calcScore($datas)
    {
        $gr = new GameRepository();
        $game = $gr->findOrFail($datas["game_id"]);
        $nb_sprints = $game['nb_sprints'];
        $sprints_player = count($datas["sprintsPlayer"]);
        $sprintsPts = self::part_sprint - (($sprints_player - $nb_sprints) * 10);
        //return $nb_sprints;
        $flat_player_choices = [];
        $ordreIdeal = $datas["ordreIdeal"];
        foreach ($datas["sprintsPlayer"] as $sprint)
        {
            $flat_player_choices = [...$flat_player_choices, ...array_values($sprint)];
        }

        $ordreJoueur = $flat_player_choices;

        $ordreIdeal = (count($ordreIdeal) === count($flat_player_choices)) ? $ordreIdeal : array_slice($datas["ordreIdeal"],0,-(count($ordreIdeal) - count($flat_player_choices)));
        $ordreIdeal;

        $dist_euc_joueur = $this->eucDistance($ordreJoueur, $ordreIdeal);

        $worseCase = $this->eucDistance($ordreIdeal, array_reverse($ordreIdeal));
        if($worseCase== 0){
            return 0;
        }
        $percent = $dist_euc_joueur/$worseCase*100;
        return max(round($sprintsPts + (60 - ((60 * $percent) / 100)), 0), 0);
    }

    function eucDistance(array $a, array $b) {
        return
        array_sum(
            array_map(
                function($x, $y) {
                    return abs($x - $y) ** 2;
                }, $a, $b
            )
        );
    }

}
