<?php

namespace App\Repositories;

use App\Models\Dish;

class DishRepositorySqlPuro implements DishRepositoryInterface
{

    public function create($name, $description, $price, $category, $available): int
    {
        $db = __DIR__.'/../../../database/database.sqlite';
       // com sqlite que está no database/restaurant.db
        $pdo = new \PDO('sqlite:'.$db);
        $stmt = $pdo->prepare('INSERT INTO dishes (name, description, price, category, available) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$name, $description, $price, $category, $available]);
        return (int) $pdo->lastInsertId();
    }
}
