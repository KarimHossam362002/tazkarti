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
        Schema::create('tazkaras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tazkara');
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('entertainment_id');
            $table->timestamps();
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('entertainment_id')->references('id')->on('entertainments')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tazkaras');
    }
};
