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
    Schema::create('pengajuan_cuti', function (Blueprint $table) {
    $table->id();
    $table->date('tanggal_awal');
    $table->date('tanggal_akhir');
    $table->integer('jumlah');
    $table->string('ket', 45)->nullable();
    $table->char('status', 1); // Mungkin P:Pending, A:Approved, R:Rejected
    $table->string('nip', 20);
    $table->foreign('nip')->references('nip')->on('pegawai')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cuti');
    }
};
