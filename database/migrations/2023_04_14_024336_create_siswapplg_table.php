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
        Schema::create('siswapplg', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->primary();
            $table->string('nama', 200);
            $table->string('kelas_jurusan', 100);
            $table->string('nama_ibu', 100);
            $table->string('nama_ayah', 100);
            $table->string('nama_wali', 100)->nullable();
            $table->string('no_telp_ibu', 15);
            $table->string('no_telp_ayah', 15);
            $table->string('no_telp_wali', 15)->nullable();
            $table->string('foto_siswa', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswapplg');
    }
};
