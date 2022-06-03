<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrispsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crisps', function (Blueprint $table) {
            $table->id();
            $table->string('crisp_name');
            $table->string('crisp_image')->nullable();
            $table->int('crisp_weight');
            $table->int('crisp_review_score')->nullable();
            $table->longText('crisp_review')->nullable();
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
        Schema::dropIfExists('crisps');
    }
}
