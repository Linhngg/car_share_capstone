<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOdometerToCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function($table) {
            $table->integer('odometer');
            $table->integer('lastServiceOdometer');
            $table->integer('serviceInterval');
            $table->date('lastServiceDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function($table) {
            $table->dropColumn('odometer');
            $table->dropColumn('lastServiceOdometer');
            $table->dropColumn('serviceInterval');
            $table->dropColumn('lastServiceDate');
        });
    }
}
