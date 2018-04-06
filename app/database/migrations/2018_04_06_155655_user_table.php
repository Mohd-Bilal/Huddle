<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('users_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Password');
            $table->string('DOB');
            $table->string('Email');
            $table->string('Mobile No');

            //
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
