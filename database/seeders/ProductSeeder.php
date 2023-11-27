<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $category_ids = Category::select('id')->get()->toArray();
        for ($i=1;$i <=30;$i++)
        {
        Product::create(
            [
                'category_id'=>array_rand($category_ids),
                'name'=>'Ürün'.$i,
                'price'=>rand(1,40),
                'created_at'=> Carbon::today()->subDays(rand(0, 180))
            ]
        );
        }

    }
}
