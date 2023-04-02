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
        Schema::create('_details', function (Blueprint $table) {
            $table->id();
            $table->integer('invouce_id')->notnull();
            $table->integer('product_id')->notnull();
            $table->integer('quantily')->notnull();
            $table->integer('price')->notnull();
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
        Schema::dropIfExists('_details');
    }
};
