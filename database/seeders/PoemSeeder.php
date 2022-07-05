<?php

namespace Database\Seeders;

use App\Models\Poem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// php artisan make:seeder PoemSeeder
class PoemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poem::factory()->count(5)->create();
    }
}
