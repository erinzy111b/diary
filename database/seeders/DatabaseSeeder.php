<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\DiarySeeder;
use Database\Seeders\FeelingSeeder;
use Database\Seeders\SymptomSeeder;
use Database\Seeders\WeatherSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //關閉外鍵偵測
        $this->call(DiarySeeder::class);
        $this->call(WeatherSeeder::class);
        $this->call(FeelingSeeder::class);
        $this->call(SymptomSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}