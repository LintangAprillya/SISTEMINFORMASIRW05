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
        Schema::create('data_k_k_s', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('no_kk')->unique();
            $table->string('nama_kepala_keluarga', 100);
            $table->string('rt_rw', 10);
            $table->string('alamat', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_k_k_s');
    }
};
