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
    Schema::create('antrian_services', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pesanan');
        $table->foreign('id_pesanan')->references('id')->on('tr_pesanans')->onDelete('cascade');
        $table->integer('nomor_antrian');
        $table->enum('status_antrian', ['menunggu', 'sedang diproses', 'selesai']);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('antrian_services');
}

};
