<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->default(3);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('institute');
            $table->string('qualification');
            $table->string('bmdc');
            $table->integer('department_id');
            $table->string('fees');
            $table->string('birth');
            $table->string('nid');
            $table->string('phone');
            $table->string('address');
            $table->string('district');
            $table->string('password');
            $table->text('avatar')->nullable();

            $table->integer('status')->default(1);
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
        Schema::dropIfExists('doctors');
    }
}
