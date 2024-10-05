<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories =
        [
            ['name' => 'Antibiotics'],
            ['name' => 'Pain Relievers'],
            ['name' => 'Antivirals'],
            ['name' => 'Vitamins and Supplements']
        ];

        foreach($categories as $category)
        {
            Category::create($category);
        }

    }
}
