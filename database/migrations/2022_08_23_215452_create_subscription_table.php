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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('uname');
            $table->integer('age');
            $table->string('sexo')->nullable();
            $table->string('nucleo');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->text('infosaude')->nullable();
            $table->text('infonecessidades')->nullable();
            $table->string('autimgarquivo');
            $table->string('autpaisarquivo')->nullable();
            $table->string('comppagto');
            $table->string('hash');
            $table->string('status');
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}