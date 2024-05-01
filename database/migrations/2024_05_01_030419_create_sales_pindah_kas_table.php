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
        Schema::create('sales_pindah_kas', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal')->nullable();
            $table->string('yang_menyerahkan')->nullable();
            $table->string('yang_menerima')->nullable();
            $table->string('pindah_dari_kas')->nullable();
            $table->string('pindah_ke_kas')->nullable();
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
        Schema::dropIfExists('sales_pindah_kas');
    }
};
