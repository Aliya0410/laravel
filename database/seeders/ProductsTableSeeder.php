<?php

namespace Database\Seeders;

use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        $products = [
            ["name" => "Orange", "cost" => 50000000, "amount" => 27],
            ["name" => "Banana", "cost" => 120000000, "amount" => 17],
            ["name" => "Bread", "cost" => 70000000, "amount" => 0]
        ];
        
        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
