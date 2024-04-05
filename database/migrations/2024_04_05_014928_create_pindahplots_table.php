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
        Schema::create('pindahplot', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('nota',);
            $table->string('dari_plot');
            $table->string('ke_plot');
            $table->string('letak_kas');
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
        Schema::dropIfExists('pindahplot');
    }
};
