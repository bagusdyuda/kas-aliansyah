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
        Schema::create('rincian_nota_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit')->nullable();
            $table->string('nama_unit')->nullable();
            $table->string('tanggal_setor')->nullable();
            $table->string('nama_customer')->nullable();
            $table->bigInteger('nominal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rincian_nota_sales');
    }
};
