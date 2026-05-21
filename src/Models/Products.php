<?php

declare(strict_types=1);

namespace App\Models;

require __DIR__ . '/../../vendor/autoload.php';
$products = Products::all();

class Products
{
    public static function all(): array
    {
        return [
            [
                'name' => 'Resident Evil Requiem',
                'price' => 299.99,
                'is_available' => true,
            ],
            [
                'name' => 'Sillent Hill Remake',
                'price' => 199.99,
                'is_available' => true,
            ],
            [
                'name' => 'The Last of Us Part 2',
                'price' => 149.99,
                'is_available' => false,
            ],
        ];
    }

}