<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table)
        {
            //PK
            $table->id();
            //FK
            $table->foreignId('branch_id');
            //Main Columns
            $table->string('national_id');
            $table->string('name');
            $table->integer('age');
            $table->string('phone');
            $table->string('address');
            //Default Dates
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
};
