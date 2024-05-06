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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pasien');
            $table->string('nama_dokter');
            $table->string('spesialiasi');
            $table->string('waktu');
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
