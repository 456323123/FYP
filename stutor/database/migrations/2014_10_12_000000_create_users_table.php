<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('city');
            $table->string('gender');
            // $table->string('usertype')->nullable();
            $table->string('document')->nullable();
            $table->string('email')->unique();
            $table->string('avatar')->default('default.png');
            $table->string('password');
            $table->string('address');
             $table->boolean('status');
            $table->enum('usertype', ['admin', 'teacher', 'student'])->default('teacher');

            $table->rememberToken();
            //subjectas
            $table->string('qualification');
            $table->string('experience')->nullable();
            $table->string('intro')->nullable();


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
        Schema::dropIfExists('users');
    }
}
