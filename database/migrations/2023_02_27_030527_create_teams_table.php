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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->String('kode')->unique();
            $table->String('nama');
            $table->String('image');
            $table->String('region');
            $table->String('city');
            $table->String('arena');
            $table->String('coach');
            $table->String('owner');
            $table->String('website');
            $table->String('twitter');
            $table->String('facebook');
            $table->String('instagram');
            $table->String('youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};