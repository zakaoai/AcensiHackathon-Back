<?php

namespace App\Http\Controllers\Card;

use App\Contracts\Core\Services\ApiResponseService;
use App\Http\Controllers\Controller;
use App\Services\Card\CardService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CardController extends Controller
{
    private CardService $cardService;
    private ApiResponseService $apiResponseService;

    public function __construct(CardService $cardService, ApiResponseService $apiResponseService)
    {
        $this->cardService = $cardService;
        $this->apiResponseService = $apiResponseService;
    }

    public function show(string $id): JsonResponse
    {
        try {
            $card = $this->cardService->findOrFail($id);
            return $this->apiResponseService->success($card);
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

    public function showAll(): JsonResponse
    {
        try {
            return $this->apiResponseService->success($this->cardService->all());
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            'libelle' => ['required', 'string', 'max:200'],
            'cout' => ['required', 'integer'],
            'ordre' => ['required', 'integer']
        ]);

        try {
            DB::beginTransaction();
            $card = $this->cardService->create($request->all());
            DB::commit();
            return $this->apiResponseService->success($card);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->apiResponseService->error($e->getMessage());
        }
    }
}
