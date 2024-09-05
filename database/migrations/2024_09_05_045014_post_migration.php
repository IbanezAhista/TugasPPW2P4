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
        Schema::create('identity', function(Blueprint $table) {
            $table->id();
            $table->text('Ibanez Centivolia Ahista');
            $table->string('23/513962/SV/22272');
            $table->string('Praktikum Pemrograman Web 2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identity');
    }
};
