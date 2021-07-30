<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifyAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notify_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('session_id')->nullable();
            $table->integer('user')->nullable();
            $table->integer('problem_type')->default('1'); // Duplicate Name
            $table->text('desc')->nullable();
            $table->integer('status')->default(0)->comment('0 for opened, 1 for acknowledged');
            $table->timestamps();

            $table->foreign('session_id')->references('id')->on('data_entry_session');
            $table->foreign('user')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_notify_admin');
    }
}
