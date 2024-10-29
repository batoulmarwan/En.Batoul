<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('puplic_events', function (Blueprint $table) {
            $table->id();
            $table->string('type_event');
            //$table->string('name_responsible');
            $table->string('name_event');
            $table->string('name_singer');
            //$table->string('area_event');
            $table->string('place_event');
            $table->date('date_event');
           // $table->date('day_event');
            $table->string('clock_event');
           // $table->string('servic');
            $table->integer('price_taket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puplic_events');
    }
};
