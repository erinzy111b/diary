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
        );
        Symptom::create(
            [
                'id' => 2,
                'name' => 'sore_throat',
                //喉嚨痛
            ],
        );
        Symptom::create(
            [
                'id' => 3,
                'name' => 'stomachache',
                //肚子痛
            ],
        );
        Symptom::create(
            [
                'id' => 4,
                'name' => 'fever',
                //發燒
            ],
        );
        Symptom::create(
            [
                'id' => 5,
                'name' => 'headache',
                //頭痛
            ],
        );
        Symptom::create(
            [
                'id' => 6,
                'name' => 'throw_up',
                //嘔吐
            ],
        );
        Symptom::create(
            [
                'id' => 7,
                'name' => 'diarrhea',
                //拉肚子
            ],
        );
        Symptom::create(
            [
                'id' => 8,
                'name' => 'stuffy_nose',
                //鼻塞
            ],
        );
        Symptom::create(
            [
                'id' => 9,
                'name' => 'injury',
                //外傷
            ],
        );
        Symptom::create(
            [
                'id' => 10,
                'name' => 'sore',
                //痠痛
            ],
        );
    }
}
