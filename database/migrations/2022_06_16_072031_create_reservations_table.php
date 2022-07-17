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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->integer('num_of_people');
            $table->string('status');
            $table->BigInteger("table_id")->unsigned();
            $table->BigInteger("order_id")->unsigned();
            $table->foreign("table_id")->references("id")->on("tables")->onDelete("cascade");
            $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");
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
        Schema::dropIfExists('reservations');
    }
};
