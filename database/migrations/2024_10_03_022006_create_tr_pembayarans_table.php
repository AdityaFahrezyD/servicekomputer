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
        Schema::create('tr_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesanan');
            $table->integer('total_harga');
            $table->enum('jenis_pembayaran', ['cash', 'transfer', 'kartu kredit']);
            $table->enum('status_pembayaran', ['menunggu', 'lunas', 'belum lunas']);
            $table->foreign('id_pesanan')->references('id')->on('tr_pesanans')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_pembayarans');
    }
};
