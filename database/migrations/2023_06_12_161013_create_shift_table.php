<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift', function (Blueprint $table) {
            $table->id()->comment("編號");
            $table->string('a11')->nullable(true)->comment("11");
            $table->string('a21')->nullable(true)->comment("21");
            $table->string('a31')->nullable(true)->comment("31");
            $table->string('a41')->nullable(true)->comment("41");
            $table->string('a51')->nullable(true)->comment("51");
            $table->string('b12')->nullable(true)->comment("12");
            $table->string('b22')->nullable(true)->comment("22");
            $table->string('b32')->nullable(true)->comment("32");
            $table->string('b42')->nullable(true)->comment("42");
            $table->string('b52')->nullable(true)->comment("52");
            $table->string('c13')->nullable(true)->comment("13");
            $table->string('c23')->nullable(true)->comment("23");
            $table->string('c33')->nullable(true)->comment("33");
            $table->string('c43')->nullable(true)->comment("43");
            $table->string('c53')->nullable(true)->comment("53");
            $table->string('c13_2')->nullable(true)->comment("13_2");
            $table->string('c23_2')->nullable(true)->comment("23_2");
            $table->string('c33_2')->nullable(true)->comment("33_2");
            $table->string('c43_2')->nullable(true)->comment("43_2");
            $table->string('c53_2')->nullable(true)->comment("53_2");
            $table->string('c13_3')->nullable(true)->comment("13_3");
            $table->string('c23_3')->nullable(true)->comment("23_3");
            $table->string('c33_3')->nullable(true)->comment("33_3");
            $table->string('c43_3')->nullable(true)->comment("43_3");
            $table->string('c53_3')->nullable(true)->comment("53_3");
            $table->string('d14')->nullable(true)->comment("14");
            $table->string('d24')->nullable(true)->comment("24");
            $table->string('d34')->nullable(true)->comment("34");
            $table->string('d44')->nullable(true)->comment("44");
            $table->string('d54')->nullable(true)->comment("54");
            $table->string('e15')->nullable(true)->comment("15");
            $table->string('e25')->nullable(true)->comment("25");
            $table->string('e35')->nullable(true)->comment("35");
            $table->string('e45')->nullable(true)->comment("45");
            $table->string('e55')->nullable(true)->comment("55");
            $table->string('f16')->nullable(true)->comment("16");
            $table->string('f26')->nullable(true)->comment("26");
            $table->string('f36')->nullable(true)->comment("36");
            $table->string('f46')->nullable(true)->comment("46");
            $table->string('f46_2')->nullable(true)->comment("46_2");
            $table->string('f46_3')->nullable(true)->comment("46_3");
            $table->string('f56')->nullable(true)->comment("56");
            $table->string('g17')->nullable(true)->comment("17");
            $table->string('g27')->nullable(true)->comment("27");
            $table->string('g37')->nullable(true)->comment("37");
            $table->string('g47')->nullable(true)->comment("47");
            $table->string('g47_2')->nullable(true)->comment("47_2");
            $table->string('g47_3')->nullable(true)->comment("47_3");
            $table->string('g57')->nullable(true)->comment("57");
            $table->string('h18')->nullable(true)->comment("18");
            $table->string('h18_2')->nullable(true)->comment("18_2");
            $table->string('h18_3')->nullable(true)->comment("18_3");
            $table->string('h28')->nullable(true)->comment("28");
            $table->string('h28_2')->nullable(true)->comment("28_2");
            $table->string('h28_3')->nullable(true)->comment("28_3");
            $table->string('h38')->nullable(true)->comment("38");
            $table->string('h38_2')->nullable(true)->comment("38_2");
            $table->string('h38_3')->nullable(true)->comment("38_3");
            $table->string('h58')->nullable(true)->comment("58");
            $table->string('h58_2')->nullable(true)->comment("58_2");
            $table->string('h58_3')->nullable(true)->comment("58_3");
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
        Schema::dropIfExists('shift');
    }
}
