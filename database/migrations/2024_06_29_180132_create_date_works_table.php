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
        Schema::create('date_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained('places');
            $table->string('month');
            $table->string('day');
            $table->date('date');
            $table->string('date_start');
            $table->string('date_finish');
            $table->enum('status',['yes','no'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_works');
    }
};
