<?php

namespace Database\Seeders;

use App\Models\budget;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class budgetseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        budget::create([
            'classify'=>'High Level',
            ]);
        budget::create([
            'classify'=>'midum Level',
                ]);
        budget::create([
            'classify'=>'good Level',
                    ]);
    }
}
