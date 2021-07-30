<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->nullable(false)->autoIncrement();
//            $table->integer('UR_ID')->nullable();
            $table->string('username',45)->unique();
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('FName',45)->nullable(false);
            $table->string('MName',45)->nullable();
            $table->string('LName',45)->nullable(false);
            $table->ipAddress('ip')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('profile')->nullable();
            $table->text('about')->nullable();
            $table->boolean('is_Active')->nullable(false)->default(false);
            $table->boolean('is_Blocked')->nullable(false)->default(false);
            $table->integer('WA')->nullable();
            $table->json('settings');
            $table->integer('parent_ID')->nullable();
            $table->timestamp('lastLogin')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('joinedDate')->default(DB::raw('CURRENT_TIMESTAMP'));
//            $table->integer('userType');

            $table->timestamps();

//            $table->foreign('userType')->references('UT_ID')->on('user_type');
//            $table->foreign('UR_ID')->references('UR_ID')->on('user_role');
            $table->foreign('WA')->references('WA_ID')->on('ward_address');
            $table->foreign('parent_ID')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
