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
        Schema::create('dreams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->string('content', 500)->nullable();
            $table->string('who', 50)->nullable();
            $table->string('what', 255)->nullable();
            $table->string('when', 50)->nullable();
            $table->string('where', 255)->nullable();
            $table->string('why', 255)->nullable();
            $table->string('how', 255)->nullable();
            $table->string('remark', 255)->nullable();
            $table->string('img', 255)->nullable();
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
        Schema::table('dreams', function
            (Blueprint $table) {
                $table->dropForeign(array('user_id'));
            });

        Schema::dropIfExists('dreams');
    }
};
