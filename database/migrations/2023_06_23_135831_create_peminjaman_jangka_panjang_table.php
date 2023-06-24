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
        Schema::create('peminjaman_jangka_panjang', function (Blueprint $table) {
            // $table->id();
            $table->id();
            $table->string('nama_peminjam');
            $table->string('no_hp');
            $table->string('ruangan');
            $table->string('kegiatan');
            $table->string('jumlah_peserta');
            $table->string('range');
            $table->json('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_jangka_panjang');
    }
};
