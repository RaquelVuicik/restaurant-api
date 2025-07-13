<?php

namespace App\Repositories;

use App\Models\Dish;

class DishRepository implements DishRepositoryInterface
{

    public function create($name, $description, $price, $category, $available): int
    {
//        $dish = new \App\Models\Dish();
//        $dish->name = $name;
//        $dish->description = $description;
//        $dish->price = $price;
//        $dish->category = $category;
//        $dish->available = $available;
//        $dish->save();
//
//        return $dish->id;

        $dish = Dish::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'category' => $category,
            'available' => $available
        ]);

        return $dish->id;
    }
}
