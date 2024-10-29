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
        Schema::create('date_halls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained('places');
            $table->date('date');
            $table->string('day');
            $table->string('date_start');
            $table->string('date_finish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_halls');
    }
};
