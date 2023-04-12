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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->string('dowhat', 500)->nullable();
            $table->boolean('positive')->nullable();
            $table->boolean('negative')->nullable();
            $table->unsignedBigInteger('feeling_id')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('feeling_id')->references('id')->on('feelings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('records', function
            (Blueprint $table) {
                $table->dropForeign(array('user_id'));
                $table->dropForeign(array('feeling_id'));
            });
        Schema::dropIfExists('records');
    }
};