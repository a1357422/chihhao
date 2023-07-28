<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment("編號");
            $table->string('name')->nullable(false);
            $table->string('role')->nullable(true)->comment('身份');
            $table->string('username')->nullable(true)->unique();
            $table->string('password')->nullable(true);
            $table->string('cardID')->nullable(true)->comment("卡號");
            $table->string('studentID')->nullable(true)->comment("學號");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
