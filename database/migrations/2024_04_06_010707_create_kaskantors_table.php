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
        Schema::create('kaskantor', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_masuk');
            $table->string('nota');
            $table->string('letak_setoran');
            $table->string('plot');
            $table->string('pengirim');
            $table->string('penerima');
            $table->string('keperluan');
            $table->string('keterangan');
            $table->bigInteger('nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaskantor');
    }
};
