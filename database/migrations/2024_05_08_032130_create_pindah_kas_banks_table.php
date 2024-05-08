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
        Schema::create('pindah_kas_banks', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal')->nullable();
            $table->string('kas_bank')->nullable();
            $table->string('pindah_ke')->nullable();
            $table->string('keterangan')->nullable();
            $table->bigInteger('nominal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pindah_kas_banks');
    }
};
