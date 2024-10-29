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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('judul_dokumen')->unique();
            $table->string('isi_dokumen');
            $table->date('tgl_pembuatan');
            $table->string('status_dokumen');
            $table->string('id_ormawa');
            $table->foreign('id_ormawa')
            ->references('id_ormawa')
            ->on('ormawa')
            ->onDelete('cascade');
            $table->foreign('id_dosen')
            ->references('id_dosen')
            ->on('dosen')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
