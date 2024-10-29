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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
           $table->foreignId('type_event_id')->constrained('type_events');
           $table->foreignId('town_id')->constrained('towns');
           $table->foreignId('area_id')->constrained('areas');
           $table->foreignId('budget_id')->constrained('budgets');
           $table->foreignId('place_id')->constrained('places');
           $table->foreignId('music_id')->constrained('music');
           $table->foreignId('singe_id')->constrained('singes');
           $table->foreignId('more_id')->constrained('mores');
           $table->foreignId('food_type_id')->constrained('food_types');
           $table->foreignId('sweate_type_id')->constrained('sweate_types');
           $table->foreignId('main_cake_id')->constrained('main_cakes');
           $table->foreignId('char_id')->constrained('chars');
           $table->foreignId('table_id')->constrained('tables');
           $table->foreignId('theme_id')->constrained('themes');
           $table->foreignId('lite_id')->constrained('lites');
           $table->foreignId('theme_color_id')->constrained('theme_colors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
