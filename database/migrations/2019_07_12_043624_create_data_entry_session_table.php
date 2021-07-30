<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEntrySessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_entry_session', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->json('data');
            $table->boolean('status')->default(false);
            $table->integer('u_id')->nullable();
            $table->integer('wa_id')->nullable();
            $table->timestamps();

            $table->foreign('u_id')->references('id')->on('users');
            $table->foreign('wa_id')->references('WA_ID')->on('ward_address');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_entry_session');
    }
}
