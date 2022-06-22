<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFridgeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fridge_details', function (Blueprint $table) {
            $table->uuid('fridge_id')->primary();
            $table->uuid('item_id');
            $table->string('quantity');
            $table->date('added_date');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('fridge_id')->references('id')->on('fridges')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('item_id')->references('id')->on('items')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fridge_details');
    }
}
