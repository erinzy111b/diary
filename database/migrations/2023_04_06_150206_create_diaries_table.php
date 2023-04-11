<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->unsignedBigInteger('feeling_id')->nullable();
            $table->string('feelings')->nullable();
            $table->unsignedTinyInteger('feeling_point_average')->nullable(); //當日心情平均數
            $table->unsignedTinyInteger('feeling_point_max')->nullable(); //當日心情高點
            $table->unsignedTinyInteger('feeling_point_min')->nullable(); //當日心情低點
            $table->string('weather_id')->nullable();
            $table->float('temperature', 10, 1)->nullable(); //攝氏，總長6個字元，至小數點1位
            $table->string('feellike', 10)->nullable(); //體感，冷涼普悶熱
            $table->string('exercise', 10)->nullable(); //運動量，多中少無
            $table->string('eat', 10)->nullable(); //進食量，多中少
            $table->string('drink', 10)->nullable(); //飲水量，多中少
            $table->unsignedfloat('weight', 10, 2)->nullable(); //公斤，總長3個字元，至小數點2位
            $table->string('pressure', 50)->nullable(); //壓力源
            $table->string('symptom_id')->nullable(); //不適症狀
            $table->boolean('period')->nullable();
            $table->boolean('autolesionA')->default(false); //自傷念頭
            $table->boolean('autolesionB')->default(false); //自傷計畫
            $table->boolean('autolesionC')->default(false); //自傷行為
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diaries', function
            (Blueprint $table) {
                $table->dropForeign(array('user_id'));
            });

        Schema::dropIfExists('diaries');
    }
};