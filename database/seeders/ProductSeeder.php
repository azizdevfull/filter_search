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
        Product::create([
            'name' => 'Samsug A31',
            'region_id' => rand(1,3)
        ]);
        Product::create([
            'name' => 'Iphone 14 pro max',
            'region_id' => rand(1,3)
        ]);
        Product::create([
            'name' => 'RedMe note 10 pro',
            'region_id' => rand(1,3)
        ]);
        Product::create([
            'name' => 'Huawey 10 pro',
            'region_id' => rand(1,3)
        ]);
        Product::create([
            'name' => 'Artel 5x',
            'region_id' => rand(1,3)
        ]);
        
    }
}
