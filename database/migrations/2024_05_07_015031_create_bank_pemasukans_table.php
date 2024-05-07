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
        Schema::create('bank_pemasukans', function (Blueprint $table) {
            $table->id();
            $table->string('unit')->nullable();
            $table->string('tanggal_mutasi_bank')->nullable();
            $table->string('no_ref')->nullable();
            $table->string('letak_kas_bank')->nullable();
            $table->string('atas_nama_pengirim')->nullable();
            $table->string('keperluan')->nullable();
            $table->bigInteger('nominal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_pemasukans');
    }
};
