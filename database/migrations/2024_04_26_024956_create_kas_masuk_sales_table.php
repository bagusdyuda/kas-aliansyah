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
        Schema::create('kas_masuk_sales', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_setoran')->nullable();
            $table->string('unit')->nullable();
            $table->string('nota')->nullable();
            $table->string('penerima')->nullable();
            $table->string('keperluan')->nullable();
            $table->string('keterangan')->nullable();
            $table->bigInteger('nominal')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas_masuk_sales');
    }
};
