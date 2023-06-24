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
        Schema::create('peminjaman_jangka_pendek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('no_hp');
            $table->string('ruangan');
            $table->string('kegiatan');
            $table->string('jumlah_peserta');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_jangka_pendek');
    }
};
