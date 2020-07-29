<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20); //varchar(20) NOT NULL,
            $table->string('password', 60); //char(32) NOT NULL,
            $table->string('email',123)->unique(); //varchar(128) NOT NULL,
            $table->string('first_name', 20)->nullable(); //varchar(20) NOT NULL,
            $table->string('last_name', 20)->nullable(); //varchar(20) NOT NULL,
            $table->string('address', 64)->nullable(); //varchar(64) NOT NULL,
            $table->string('phone', 15)->nullable(); //varchar(15) NOT NULL,
            $table->biginteger('registration_date')->nullable(); //bigint(10) NOT NULL,
            $table->tinyInteger('active')->default(0); //tinyint(1) NOT NULL,
            $table->string('email_code', 5)->nullable(); //char(5) NOT NULL,
            $table->tinyInteger('fk_group_id')->nullable(); //tinyint(1) NOT NULL,
            $table->tinyInteger('head')->default('0'); //int(1) NOT NULL DEFAULT '0',
            $table->rememberToken();
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
        Schema::dropIfExists('admin_users');
    }
}
