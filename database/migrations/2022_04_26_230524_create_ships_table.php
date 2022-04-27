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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('ship_name')->unique();
            $table->unsignedBigInteger('manufacturer_id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('focus_id');
            $table->string('ship_image');
            $table->tinyInteger('crew_size');
            $table->float('length');
            $table->integer('mass');
            $table->float('unit_price');
            $table->integer('units_in_stock');
            $table->timestamps();

            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('focus_id')->references('id')->on('focus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ships');
    }
};
