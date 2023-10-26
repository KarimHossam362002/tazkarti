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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournment_id');
            $table->unsignedBigInteger('stadium_id');
            $table->string('time_number');
            $table->string('time_period');
            $table->string('date');
            $table->boolean('status');
            $table->foreign('tournment_id')->references('id')->on('tournments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('stadium_id')->references('id')->on('stadiums')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
