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
            $table->foreignId('manufacturer_id')->constrained()->onUpdate('cascade');
            $table->foreignId('rol_id')->constrained()->onUpdate('cascade');
            $table->foreignId('focus_id')->constrained('focus')->onUpdate('cascade');
            $table->string('ship_image');
            $table->tinyInteger('crew_size');
            $table->float('length');
            $table->integer('mass');
            $table->float('unit_price');
            $table->integer('units_in_stock');
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
        Schema::dropIfExists('ships');
    }
};
