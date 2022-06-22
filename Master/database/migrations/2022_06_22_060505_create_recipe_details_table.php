<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_details', function (Blueprint $table) {
            $table->uuid('recipe_id')->primary();
            $table->uuid('item_id');
            $table->string('quantity');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('recipe_id')->references('id')->on('recipes')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('recipe_details');
    }
}
