<?php

namespace App\Http\Controllers;

use App\Contracts\Core\Services\ApiResponseService;
use App\Http\Controllers\Controller;
use App\Services\Card\CardGameService;
use App\Services\Card\CardService;
use App\Services\ScoreService\ScoreService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class GameController extends Controller
{
    private CardGameService $cardGameService;
    private ScoreService $scoreService;
    private ApiResponseService $apiResponseService;

    public function __construct(CardGameService $cardGameService, ScoreService $scoreService, ApiResponseService $apiResponseService)
    {
        $this->cardGameService = $cardGameService;
        $this->scoreService = $scoreService;
        $this->apiResponseService = $apiResponseService;
    }

    public function getScore(Request $request)
    {
        $gameId = $request->get('game');
        $dataFromServer = $this->cardGameService->findByGame($gameId);
        $dataFromServer["sprintsPlayer"] = $request->get("sprints");
        $dataFromServer["game_id"] = $gameId;

        try {
            return $this->apiResponseService->success($this->scoreService->calcScore($dataFromServer));
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

    public function getCardByGame(string $id)
    {
        try {
            return $this->apiResponseService->success($this->cardGameService->findCardsByGame($id));
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

    public function getSolutionByGame(string $id)
    {
        try {
            return $this->apiResponseService->success($this->cardGameService->findSolutionByGame($id));
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }
}
