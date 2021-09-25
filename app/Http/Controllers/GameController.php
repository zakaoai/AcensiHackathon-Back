<?php

namespace App\Http\Controllers;

use App\Contracts\Core\Services\ApiResponseService;
use App\Http\Controllers\Controller;
use App\Services\Card\CardGameService;
use App\Services\Card\CardService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class GameController extends Controller
{
    private CardGameService $cardGameService;
    private ApiResponseService $apiResponseService;

    public function __construct(CardGameService $cardGameService, ApiResponseService $apiResponseService)
    {
        $this->cardGameService = $cardGameService;
        $this->apiResponseService = $apiResponseService;
    }

    public function sendScore(Request $request)
    {
        $gameId = $request->get('game');

        try {
            return $this->apiResponseService->success($this->cardGameService->findByGame($gameId));
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

}
