<?php

namespace App\Http\Controllers\Dish;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDishRequest;
use Illuminate\Http\JsonResponse;

class CreateDishAction extends Controller
{
    public function __invoke(CreateDishRequest $request): JsonResponse
    {
        return new JsonResponse(['name', 'desc']);
    }
}
