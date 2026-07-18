<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Qizil olma',
                'price' => 15000,
                'description' => 'Yangi uzilgan, shirin',
                'image' => 'https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?w=400&h=300&fit=crop',
                'badge' => 'Yangi',
            ],
            [
                'id' => 2,
                'name' => 'Sut 3.2%',
                'price' => 12000,
                'description' => '1 litr, tabiiy',
                'image' => 'https://images.unsplash.com/photo-1563636619-e9143da7973b?w=400&h=300&fit=crop',
                'badge' => 'Yangi',
            ],
            [
                'id' => 3,
                'name' => 'Tandir non',
                'price' => 8000,
                'description' => 'Yangi pishirilgan',
                'image' => 'https://images.unsplash.com/photo-1589367920969-ab8e050bbb04?w=400&h=300&fit=crop',
                'badge' => 'Mashhur',
            ],
            [
                'id' => 4,
                'name' => 'Coca Cola 1.5L',
                'price' => 14000,
                'description' => 'Gazli ichimlik',
                'image' => 'https://images.unsplash.com/photo-1629203851122-3726ecdf080e?w=400&h=300&fit=crop',
                'badge' => 'Yangi',
            ],
            [
                'id' => 5,
                'name' => 'Banan',
                'price' => 22000,
                'description' => 'Import qilingan',
                'image' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=400&h=300&fit=crop',
                'badge' => 'Mashhur',
            ],
            [
                'id' => 6,
                'name' => 'Pishloq',
                'price' => 35000,
                'old_price' => 45000,
                'description' => '200g, tabiiy',
                'image' => 'https://images.unsplash.com/photo-1552767059-ce182ead6c1b?w=400&h=300&fit=crop',
                'badge' => 'Chegirma',
            ],
            [
                'id' => 7,
                'name' => 'Shokolad',
                'price' => 18000,
                'description' => 'Sutli, 90g',
                'image' => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=400&h=300&fit=crop',
                'badge' => 'Mashhur',
            ],
            [
                'id' => 8,
                'name' => 'Qulupnay',
                'price' => 28000,
                'description' => '500g, yangi',
                'image' => 'https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=400&h=300&fit=crop',
                'badge' => 'Yangi',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
