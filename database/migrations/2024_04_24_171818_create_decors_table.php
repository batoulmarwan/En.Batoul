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
        Schema::create('decors', function (Blueprint $table) {
            $table->id();
            $table->integer('num-chair');
            $table->integer('price_chair');
            $table->integer('num_table');
            $table->integer('price_table');
            $table->foreignId('light_id')->constrained('lights')->nullable();
            $table->foreignId('flwer_id')->constrained('flwers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decors');
    }
};
