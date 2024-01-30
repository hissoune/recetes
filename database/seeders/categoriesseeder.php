<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categories::factory(10)->create();
    }
}
