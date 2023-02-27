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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignID('team_id');
            $table->foreign('kode')->unique();
            $table->String('name');
            $table->String('image');
            $table->String('position');
            $table->integer('number');
            $table->integer('age');
            $table->String('height');
            $table->String('weight');
            $table->String('country');
            $table->float('PPG');
            $table->float('RPG');
            $table->float('APG');
            $table->date('birthday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};