<?php

declare(strict_types=1);

use App\Models\Products;

//require __DIR__ . '/Products.php';

require __DIR__ . '/../vendor/autoload.php';

//vai dar merda no autoload.php mas depois eu arrumo, só quero mostrar a ideia de separar a lógica da view

$products = Products::all();

$produtosFiltrados = array_filter($products, static fn(array $product) => $product['is_available']);

$title = 'My WebStore';

require __DIR__ . '/../resources/views/index.phtml';
