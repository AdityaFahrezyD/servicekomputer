<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tr_pesanans', function (Blueprint $table) {
        $table->id();
        $table->string('email_customer', 100);
        $table->foreign('email_customer')->references('email')->on('customers')->onDelete('cascade');
        $table->unsignedBigInteger('id_teknisi');
        $table->foreign('id_teknisi')->references('id')->on('teknisis')->onDelete('cascade');
        $table->dateTime('tanggal_pesanan');
        $table->integer('estimasi_biaya')->nullable();
        $table->integer('estimasi_waktu')->nullable();
        $table->enum('status_service', ['menunggu', 'dalam proses', 'selesai']);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('tr_pesanans');
}

};
