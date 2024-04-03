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
        Schema::create('setorankas', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('tgl_setoran');
            $table->string('nota');
            $table->string('letak_setoran');
            $table->string('pengirim');
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
        Schema::dropIfExists('setorankas');
    }
};
