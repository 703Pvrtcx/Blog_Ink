<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

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
            "name"=>"Nokia 9",
            "price"=>2999,
            "category"=>"mobile",
            "description"=>"Mobile Phone, Dual Sim, Dual Core 3 Camera. 37 hours battery power",
            "imageURL"=>"nokia-9.jpg",
        ]);
        
        Product::create([
            "name"=>"iPhone XII",
            "price"=>3999,
            "category"=>"mobile",
            "description"=>"Mobile Phone, Finger-print scanner, 2KM Zoom Power",
            "imageURL"=>"iPhone-12.jpg",
        ]);
    }
}
