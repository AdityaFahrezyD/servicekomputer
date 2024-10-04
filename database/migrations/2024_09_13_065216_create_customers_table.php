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
    Schema::create('customers', function (Blueprint $table) {
        $table->id(); // Use auto-incrementing ID as the primary key
        $table->string('email', 100)->unique(); // Make email unique instead of primary
        $table->string('nama', 100);
        $table->string('alamat', 100);
        $table->string('hp', 15);
        $table->string('password', 255);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('customers');
}

};
