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
            $table->string('dowhat')->nullable();
            $table->string('positive')->nullable();
            $table->string('negative')->nullable();
            $table->string('forward')->nullable();
            $table->string('regrettable')->nullable();
            $table->string('interesting')->nullable();
            $table->string('boring')->nullable();
            $table->string('content')->nullable();
            $table->string('worthless')->nullable();
            $table->string('relaxing')->nullable();
            $table->string('worried')->nullable();
            $table->string('hopeful')->nullable();
            $table->string('desperate')->nullable();
            $table->string('relaxing')->nullable();
            $table->string('annoyed')->nullable();
            $table->string('hurt')->nullable();
            $table->string('content')->nullable();
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
        Schema::table('records', function
            (Blueprint $table) {
                $table->dropForeign(array('user_id'));
            });
        Schema::dropIfExists('records');
    }
};