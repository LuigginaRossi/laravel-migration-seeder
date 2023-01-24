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
        Schema::table('trains', function (Blueprint $table) {
            $table->bigInteger('traincode');
            $table->integer('number_carriages');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_date');
            $table->dateTime('arrival_date');
            $table->boolean('deleted')->default(false);
            $table->boolean('in_time')->defautl(true);
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->bigInteger('traincode');
            $table->integer('number_carriages');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_date');
            $table->dateTime('arrival_date');
            $table->boolean('deleted')->default(false);
            $table->boolean('in_time')->defautl(true);
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('company');
        });
    }
};
