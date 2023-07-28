<?php

namespace Database\Seeders;

use App\Models\Basesalary;
use Illuminate\Database\Seeder;

class BasesalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $basesalary = Basesalary::create([
            'basesalary' => 176,
        ]);
    }
}
