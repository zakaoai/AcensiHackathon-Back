<?php

namespace App\Services\ScoreService;


class ScoreService
{
    function calcScore()
    {

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
