<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('qualita');
            $table->string('ref');
            $table->string('address');
            $table->string('cap');
            $table->string('city');
            $table->string('cf')->nullable();
            $table->string('piva')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
