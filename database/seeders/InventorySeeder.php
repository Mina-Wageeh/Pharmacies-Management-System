<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create([
            'branch_id' => 1
        ]);

        Inventory::create([
            'branch_id' => 2
        ]);

        Inventory::create([
            'branch_id' => 3
        ]);
    }
}
