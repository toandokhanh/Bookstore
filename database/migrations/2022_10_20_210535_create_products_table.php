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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('ac_id')->unique()->nullable();
            $table->tinyInteger('cate_id')->unique()->nullable();
            $table->tinyInteger('publisher_id')->unique()->nullable();
            $table->string('product_name');
            $table->longText('describe');
            $table->double('product_price', 10, 2);
            $table->string('size');
            $table->string('translater')->nullable();
            $table->string('image');
            $table->timestamp('product_created_date', $precision = 0);
            $table->year('year_of_manufacture');
            $table->string('number_of_pages');


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
        Schema::dropIfExists('products');
    }
};
