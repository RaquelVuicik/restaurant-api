<?php

namespace App\UseCases\Dish\CreateDish;

use App\Repositories\DishRepositoryInterface;

class CreateDishUseCase
{
    public function __construct(private readonly DishRepositoryInterface $repository)
    {}

    public function execute(CreateDishUseCaseInput $input): int
    {
        $dishId = $this->repository->create(
            $input->name,
            $input->description,
            $input->price,
            $input->category,
            $input->available
        );

        return $dishId;
    }
}
