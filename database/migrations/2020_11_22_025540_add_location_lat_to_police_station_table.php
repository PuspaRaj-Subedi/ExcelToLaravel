<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationLatToPoliceStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('police_station', function (Blueprint $table) {
            $table->char('image', 255)->nullable(true);
            $table->float('lat', 20, 15)->nullable(true);
            $table->float('lng', 20, 15)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('police_station', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('lat');
            $table->dropColumn('lng');
        });
    }
}
