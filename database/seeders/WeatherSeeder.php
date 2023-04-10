<?php

namespace Database\Seeders;

use App\Models\Weather;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Weather::truncate();
        Weather::create(
            [
                'id' => 1,
                'name' => 'sunny',
                //晴天
            ],
        );
        Weather::create(
            [
                'id' => 2,
                'name' => 'cloudy',
                //半雲
            ],
        );
        Weather::create(
            [
                'id' => 3,
                'name' => 'overcast',
                //陰天
            ],
        );
        Weather::create(
            [
                'id' => 4,
                'name' => 'rain',
                //多雨
            ],
        );
        Weather::create(
            [
                'id' => 5,
                'name' => 'drizzle',
                //細雨
            ],
        );
        Weather::create(
            [
                'id' => 6,
                'name' => 'snow',
                //下雪
            ],
        );
        Weather::create(
            [
                'id' => 7,
                'name' => 'fog',
                //起霧
            ],
        );
        Weather::create(
            [
                'id' => 8,
                'name' => 'extreme',
                //極端氣候
            ],
        );
    }
}