<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symptom::truncate();
        Symptom::create(
            [
                'id' => 1,
                'name' => 'cough',
                //咳嗽
            ],
            [
                'id' => 2,
                'name' => 'sore_throat',
                //喉嚨痛
            ],
            [
                'id' => 3,
                'name' => 'stomachache',
                //肚子痛
            ],
            [
                'id' => 4,
                'name' => 'fever',
                //發燒
            ],
            [
                'id' => 5,
                'name' => 'headache',
                //頭痛
            ],
            [
                'id' => 6,
                'name' => 'throw_up',
                //嘔吐
            ],
            [
                'id' => 7,
                'name' => 'diarrhea',
                //拉肚子
            ],
            [
                'id' => 8,
                'name' => 'stuffy_nose',
                //鼻塞
            ],
            [
                'id' => 9,
                'name' => 'injury',
                //外傷
            ],
            [
                'id' => 10,
                'name' => 'sore',
                //痠痛
            ],
        );
    }
}