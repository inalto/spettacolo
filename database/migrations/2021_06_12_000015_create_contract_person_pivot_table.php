<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPersonPivotTable extends Migration
{
    public function up()
    {
        Schema::create('contract_person', function (Blueprint $table) {
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id', 'person_id_fk_4148244')->references('id')->on('people')->onDelete('cascade');
            $table->unsignedBigInteger('contract_id');
            $table->foreign('contract_id', 'contract_id_fk_4148244')->references('id')->on('contracts')->onDelete('cascade');
        });
    }
}
