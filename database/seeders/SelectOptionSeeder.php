<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SelectOption;

class SelectOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SelectOption::factory()->count(4)->create();
    }
}
