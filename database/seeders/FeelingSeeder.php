<?php

namespace Database\Seeders;

use App\Models\Feeling;
use Illuminate\Database\Seeder;

class FeelingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feeling::truncate();
        Feeling::create(
            [
                'id' => 1,
                'name' => 'desirable',
                //渴望
            ],
        );
        Feeling::create(
            [
                'id' => 2,
                'name' => 'regrettable',
                //遺憾、後悔
            ],
        );
        Feeling::create(
            [
                'id' => 3,
                'name' => 'interesting',
                //有趣
            ],
        );
        Feeling::create(
            [
                'id' => 4,
                'name' => 'boring',
                //無聊
            ],
        );
        Feeling::create(
            [
                'id' => 5,
                'name' => 'happy',
                //快樂
            ],
        );
        Feeling::create(
            [
                'id' => 6,
                'name' => 'sad',
                //傷心
            ],
        );
        Feeling::create(
            [
                'id' => 7,
                'name' => 'relaxing',
                //放鬆
            ],
        );
        Feeling::create(
            [
                'id' => 8,
                'name' => 'worried',
                //擔憂、焦慮
            ],
        );
        Feeling::create(
            [
                'id' => 9,
                'name' => 'hopeful',
                //滿懷希望
            ],
        );
        Feeling::create(
            [
                'id' => 10,
                'name' => 'desperate',
                //絕望
            ],
        );
        Feeling::create(
            [
                'id' => 11,
                'name' => 'energetic',
                //充滿活力
            ],
        );
        Feeling::create(
            [
                'id' => 12,
                'name' => 'annoyed',
                //煩躁
            ],
        );
        Feeling::create(
            [
                'id' => 13,
                'name' => 'confidence',
                //自信
            ],
        );
        Feeling::create(
            [
                'id' => 14,
                'name' => 'inferiority',
                //自卑
            ],
        );
        Feeling::create(
            [
                'id' => 15,
                'name' => 'calm',
                //平靜、冷靜
            ],
        );
        Feeling::create(
            [
                'id' => 16,
                'name' => 'mad',
                //憤怒
            ],
        );
        Feeling::create(
            [
                'id' => 17,
                'name' => 'strive',
                //努力
            ],
        );
        Feeling::create(
            [
                'id' => 18,
                'name' => 'exhausted',
                //疲憊
            ],
        );
    }
}