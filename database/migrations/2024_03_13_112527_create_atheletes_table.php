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
        Schema::create('atheletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->string('image');
            $table->string('achievements');
            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('countrys');
            $table->unsignedBigInteger('id_spost');
            $table->foreign('id_spost')->references('id')->on('sports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atheletes');
    }
};
