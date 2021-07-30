<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegisteredUnregisteredLandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('land', function (Blueprint $table) {
            $table->addColumn('integer', 'registered')->default(0);
            $table->addColumn('integer', 'unregistered')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('land', function (Blueprint $table) {
            $table->dropColumn('registered');
            $table->dropColumn('unregistered');
        });
    }
}
