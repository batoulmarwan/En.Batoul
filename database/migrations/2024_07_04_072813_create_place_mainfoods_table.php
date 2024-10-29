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
        Schema::create('place_mainfoods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained('places');
            $table->foreignId('food_type_id')->constrained('food_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_mainfoods');
    }
};
