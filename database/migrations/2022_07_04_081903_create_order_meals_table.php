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
        Schema::create('order_meals', function (Blueprint $table) {
            $table->id();
            $table->double("price");
            $table->BigInteger("quantity");
            $table->BigInteger("order_id")->unsigned();
            $table->BigInteger("meal_id")->unsigned();
            $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");
            $table->foreign("meal_id")->references("id")->on("meals")->onDelete("cascade");
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
        Schema::dropIfExists('order_meals');
    }
};
