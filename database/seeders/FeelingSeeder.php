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
            [
                'id' => 2,
                'name' => 'regrettable',
                //遺憾、後悔
            ],
            [
                'id' => 3,
                'name' => 'interesting',
                //有趣
            ],
            [
                'id' => 4,
                'name' => 'boring',
                //無聊
            ],
            [
                'id' => 5,
                'name' => 'happy',
                //快樂
            ],
            [
                'id' => 6,
                'name' => 'sad',
                //傷心
            ],
            [
                'id' => 7,
                'name' => 'relaxing',
                //放鬆
            ],
            [
                'id' => 8,
                'name' => 'worried',
                //擔憂、焦慮
            ],
            [
                'id' => 9,
                'name' => 'hopeful',
                //滿懷希望
            ],
            [
                'id' => 10,
                'name' => 'desperate',
                //絕望
            ],
            [
                'id' => 11,
                'name' => 'energetic',
                //充滿活力
            ],
            [
                'id' => 12,
                'name' => 'annoyed',
                //煩躁
            ],
            [
                'id' => 13,
                'name' => 'confidence',
                //自信
            ],
            [
                'id' => 14,
                'name' => 'inferiority',
                //自卑
            ],
            [
                'id' => 15,
                'name' => 'calm',
                //平靜、冷靜
            ],
            [
                'id' => 16,
                'name' => 'mad',
                //憤怒
            ],
            [
                'id' => 17,
                'name' => 'strive',
                //努力
            ],
            [
                'id' => 18,
                'name' => 'exhausted',
                //疲憊
            ],
        );
    }
}