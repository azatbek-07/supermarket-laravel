<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

private array $products = [
    [
        'id' => 1,
        'name' => 'Qizil olma',
        'price' => 15000,
        'description' => 'Yangi uzilgan, shirin',
        'image' => 'apple.jpg',
    ],
    [
        'id' => 2,
        'name' => 'Sut 3.2%',
        'price' => 12000,
        'description' => '1 litr, tabiiy',
        'image' => 'milk.jpg',
    ],
    [
        'id' => 3,
        'name' => 'Tandir non',
        'price' => 8000,
        'description' => 'Yangi pishirilgan',
        'image' => 'bread.jpg',
    ],
    [
        'id' => 4,
        'name' => 'Coca Cola 1.5L',
        'price' => 14000,
        'description' => 'Gazli ichimlik',
        'image' => 'cola.jpg',
    ],
    [
        'id' => 5,
        'name' => 'Banan',
        'price' => 22000,
        'description' => 'Import qilingan',
        'image' => 'banana.jpg',
    ],
    [
        'id' => 6,
        'name' => 'Pishloq',
        'price' => 35000,
        'description' => '200g, tabiiy',
        'image' => 'cheese.jpg',
    ],
    [
        'id' => 7,
        'name' => 'Shokolad',
        'price' => 18000,
        'description' => 'Sutli, 90g',
        'image' => 'chocolate.jpg',
    ],
    [
        'id' => 8,
        'name' => 'Qulupnay',
        'price' => 28000,
        'description' => '500g, yangi',
        'image' => 'strawberry.jpg',
    ],
];
    public function index()
    {
        return view('home', ['products' => $this->products]);
    }
}
