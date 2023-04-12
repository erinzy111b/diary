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
            $table->string('account')->nullable();
            $table->string('ip')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->boolean('private_mode')->defalt(false);
            $table->boolean('period_mode')->defalt(false);
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
            $table->dropColumn(['account', 'ip', 'last_login_at', 'private_mode', 'private_mode', 'period_mode', 'deleted_at']);
        });
    }
};