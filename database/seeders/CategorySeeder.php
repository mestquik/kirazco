<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Category::create(
            [
                'name' => 'Teknoloji'
            ]
        );
        Category::create(
            [
                'name' => 'Bilim'
            ]
        );
        Category::create(
            [
                'name' => 'Edebiyat'
            ]
        );
        Category::create(
            [
                'name' => 'Yemek'
            ]
        );
        Category::create(
            [
                'name' => 'Ticaret'
            ]
        );
        Category::create(
            [
                'name' => 'Aksesuar'
            ]
        );
        Category::create(
            [
                'name' => 'Giyim'
            ]
        );
        Category::create(
            [
                'name' => 'Oyun'
            ]
        );



    }
}
