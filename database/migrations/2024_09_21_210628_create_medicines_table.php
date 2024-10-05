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
        Schema::create('medicines', function (Blueprint $table)
        {
            //PK
            $table->id();
            //FK
            $table->foreignId('branch_id');
            $table->foreignId('category_id');
            //Main Columns
            $table->string('code');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
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
        Schema::dropIfExists('medicines');
    }
};
