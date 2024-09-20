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
    Schema::create('dt_spareparts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pesanan');
        $table->foreign('id_pesanan')->references('id')->on('tr_pesanans')->onDelete('cascade');
        $table->unsignedBigInteger('id_sparepart');
        $table->foreign('id_sparepart')->references('id')->on('ms_spareparts')->onDelete('cascade');
        $table->integer('jumlah');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('dt_spareparts');
}

};
