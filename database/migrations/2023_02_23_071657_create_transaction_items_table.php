<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('price_book_entry_id')->nullable();
            $table->unsignedBigInteger('price_book_bundle_id')->nullable();
            $table->unsignedBigInteger('transaction_id');
            $table->timestamps();

            $table->foreign('price_book_entry_id')->references('id')->on('price_book_entries')->onDelete('cascade');
            $table->foreign('price_book_bundle_id')->references('id')->on('price_book_bundles')->onDelete('cascade');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_items');
    }
}
