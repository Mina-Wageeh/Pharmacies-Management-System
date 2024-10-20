<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(MedicineSeeder::class);
    }
}
