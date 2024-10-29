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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained('places');
            $table->foreignId('food_type_id')->constrained('food_types');
            $table->foreignId('sweate_type_id')->constrained('sweate_types');
            $table->foreignId('main_cake_id')->constrained('main_cakes');
           // $table->enum('soft_drinks',['true','false'])->default('false');
           // $table->enum('alcoholic',['true','false'])->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
