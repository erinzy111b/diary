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
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthday')->nullable();
            $table->string('sexual', 10)->nullable();
            $table->boolean('private_mode')->defalt(false);
            $table->boolean('period_mode')->defalt(false);
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['birthday', 'sexual', 'last_login_ip', 'last_login_at', 'private_mode', 'period_mode', 'deleted_at']);
        });
    }
};