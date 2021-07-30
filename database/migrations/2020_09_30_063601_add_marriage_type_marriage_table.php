<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarriageTypeMarriageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marriage', function (Blueprint $table) {
            $table->enum('type', ["0", "1", "2", "3"])->default(0)->comment('0:Arranged\n1: Love\n2: Court\n 3:Arranged And Love');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marriage', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
