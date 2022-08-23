<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();
            $table->string('uname');
            $table->integer('age');
            $table->string('sexo');
            $table->string('nucleo');
            $table->string('phone1');
            $table->string('phone2');
            $table->text('infosaude');
            $table->text('infonecessidades');
            $table->string('autimgarquivo');
            $table->string('autpaisarquivo');
            $table->string('comppagto');
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
        Schema::dropIfExists('subscription');
    }
}