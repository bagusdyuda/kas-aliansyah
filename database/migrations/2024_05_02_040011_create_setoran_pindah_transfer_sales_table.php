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
        Schema::create('setoran_pindah_transfer_sales', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal')->nullable();
            $table->integer('sales')->nullable();
            $table->string('no_ref')->nullable();
            $table->string('bank')->nullable();
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
        Schema::dropIfExists('setoran_pindah_transfer_sales');
    }
};
