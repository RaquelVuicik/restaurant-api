<?php

namespace App\Http\Controllers\Dish;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDishRequest;
use App\UseCases\Dish\CreateDish\CreateDishUseCase;
use App\UseCases\Dish\CreateDish\CreateDishUseCaseInput;
use Illuminate\Http\JsonResponse;

class CreateDishAction extends Controller
{
    public function __invoke(CreateDishRequest $request, CreateDishUseCase $useCase): JsonResponse
    {
        $input = new CreateDishUseCaseInput(
            $request->name,
            $request->description,
            $request->price,
            $request->category,
            $request->available
        );

        $output = $useCase->execute($input);

        return new JsonResponse($output);
    }
}
