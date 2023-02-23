<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceBookEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_book_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pricebook_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('pricebook_id')->references('id')->on('price_books')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_book_entries');
    }
}
