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
        Schema::create('perbaikan', function (Blueprint $table) {
            $table->string('id_perbaikan');
            $table->date('tgl_pengajuan');
            $table->string('judul_perbaikan',200);
            $table->string('User_pemohon',200);
            $table->string('User_assign',200);
            $table->string('id_ruangan',200);
            $table->string('status',200);
            $table->string('keterangan',200);
            $table->date('tgl_selesai');
            $table->date('tgl_estimasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perbaikan');
    }
};
