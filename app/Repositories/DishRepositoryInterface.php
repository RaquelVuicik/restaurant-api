<?php

namespace App\Repositories;

use App\UseCases\Dish\CreateDish\CreateDishUseCaseInput;

interface DishRepositoryInterface
{
    public function create($name, $description, $price, $category, $available): int;
}
