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
        Schema::create('meale_images', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->BigInteger("meal_id")->unsigned();
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
        Schema::dropIfExists('meale_images');
    }
};
