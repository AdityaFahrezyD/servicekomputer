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
    Schema::create('teknisis', function (Blueprint $table) {
        $table->id();
        $table->string('nama', 100);
        $table->string('alamat', 100);
        $table->string('hp', 15);
        $table->string('username', 100);
        $table->string('password', 255);
        $table->enum('status', ['dalam pengerjaan', 'kosong']);
        $table->string('job_desk', 30);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('teknisis');
}

};
