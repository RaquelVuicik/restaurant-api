<?php

namespace App\UseCases\Dish\CreateDish;

class CreateDishUseCaseInput
{
    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly float $price,
        public readonly string $category,
        public readonly bool $available,
    ) {}
}
