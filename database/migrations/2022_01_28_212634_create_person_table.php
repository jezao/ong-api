<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name',250)->nullable();
            $table->string('last_name',250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('document', 30)->nullable();
            $table->dateTime('dob',false)->nullable();
            $table->string('clothes_size',5)->nullable();
            $table->string('shoes_size',5)->nullable();
            $table->string('phone1')->nullable();
            $table->boolean('is_responsible')->default(false);
            $table->integer('responsible_id')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
