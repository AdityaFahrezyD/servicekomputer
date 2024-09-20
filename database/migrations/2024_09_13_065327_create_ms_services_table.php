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
    Schema::create('ms_services', function (Blueprint $table) {
        $table->id();
        $table->string('nama_service', 100);
        $table->integer('harga');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('ms_services');
}

};
