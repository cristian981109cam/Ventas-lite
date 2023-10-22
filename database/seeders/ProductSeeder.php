<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 200,
            'price' => 350,
            'barcode' => '7894561230',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);
        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 300,
            'price' => 450,
            'barcode' => '7894561289',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'tenis.png'
        ]);
        Product::create([
            'name' => 'IPHONE 14',
            'cost' => 400,
            'price' => 550,
            'barcode' => '7894561256',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 3,
            'image' => 'iphone14.png'
        ]);
        Product::create([
            'name' => 'PC GAMER',
            'cost' => 500,
            'price' => 650,
            'barcode' => '7894561271',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'pcgamer.png'
        ]);
    }
}
