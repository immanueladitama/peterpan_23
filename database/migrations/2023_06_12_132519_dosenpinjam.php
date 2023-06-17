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
        Schema::create('dosenpinjam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('tgl_pinjam');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('ruangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosenpinjam');
    }
};
