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
        Schema::create('pasiens', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nama_pasien');
        $table->string('alamat_pasien');
        $table->string('tgl_datang');
        $table->string('nama_obat');
        $table->string('no_telp');
        $table->text('keluhan_pasien');
        $table->unsignedBigInteger('dokter_id');
        $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
        $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
