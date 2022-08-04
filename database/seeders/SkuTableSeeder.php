<?php

namespace Database\Seeders;

use App\Models\Sku;
use Illuminate\Database\Seeder;

class SkuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sku::factory()->count(35)->create();
    }
}
