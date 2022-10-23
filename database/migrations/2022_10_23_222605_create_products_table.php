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
            $table->unsignedBigInteger('ac_id');
            $table->foreign('ac_id')
                ->references('id')->on('accounts');
            $table->unsignedBigInteger('cate_id')->alter('id');
            $table->foreign('cate_id')
                ->references('id')->on('catetorys');
            $table->unsignedBigInteger('publisher_id');
            $table->foreign('publisher_id')
                ->references('id')->on('publishers');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                ->references('id')->on('authors');
            $table->string('product_name');
            $table->longText('describe');
            $table->double('product_price', 10, 2);
            $table->string('size');
            $table->string('translater')->nullable();
            $table->string('image');
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
