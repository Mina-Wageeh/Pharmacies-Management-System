<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create
        ([
            'name' => 'M-P',
            'phone' => '01071245911',
            'address' => 'Samalout'
        ]);

        Branch::create
        ([
            'name' => 'M-P',
            'phone' => '01271245922',
            'address' => 'Matay'
        ]);

        Branch::create
        ([
            'name' => 'M-P',
            'phone' => '01571245933',
            'address' => 'Bani-Mazar'
        ]);
    }
}
