<?php

namespace Database\Seeders;

use App\Models\Diary;
use Illuminate\Database\Seeder;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diary::truncate();
        Diary::factory()->times(10)->create();
    }
}