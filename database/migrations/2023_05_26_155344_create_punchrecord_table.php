<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunchrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punchrecord', function (Blueprint $table) {
            $table->id()->comment("編號");
            $table->string('year')->nullable(true)->comment("年");
            $table->string('date')->nullable(true)->comment("月份");
            $table->foreignId("nameid")->unsigned()->nullable(false)->comment("工讀生編號");
            $table->foreign('nameid')->references('id')->on('users')->onDelete('cascade');
            $table->string('punch_in')->nullable(true)->comment("上班打卡時間");
            $table->string('punch_out')->nullable(true)->comment("下班打卡時間");
            $table->string('time')->nullable(true)->comment("時數");
            $table->boolean('mark')->nullable(true)->comment("更改");
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
        Schema::dropIfExists('punchrecord');
    }
}
