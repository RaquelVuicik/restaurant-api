<?php

namespace App\Http\Controllers\Dish;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListDishAction extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/dish",
     *      summary="Retorn a dish",
     *      tags={"Dishes"},
     *      @OA\Response(
     *          response=200,
     *          description="Dishes returned with success",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="id", type="integer"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="price", type="number", format="float")
     *          )
     *      )
     * )
     */
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(['name', 'desc']);
    }
}
