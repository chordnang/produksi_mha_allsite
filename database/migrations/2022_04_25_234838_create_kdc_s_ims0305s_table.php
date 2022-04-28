<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kdc_s_ims0305s', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('nama')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('unit')->nullable();
            $table->string('roster')->nullable();
            $table->string('attdn')->nullable();
            $table->string('buang_awal_shift')->nullable();
            $table->string('gantung_akhir_shift')->nullable();
            $table->string('rit_by_manual')->nullable();
            $table->string('rit_by_rfid')->nullable();
            $table->string('ritase_actual')->nullable();
            $table->string('tonase')->nullable();
            $table->string('lokasi_exa')->nullable();
            $table->string('jarak')->nullable();
            $table->string('hm_awal')->nullable();
            $table->string('hm_akhir')->nullable();
            $table->integer('total_hm')->nullable();
            $table->string('non_prod')->nullable();
            $table->integer('total_jam')->nullable();
            $table->string('km_awal')->nullable();
            $table->string('km_akhir')->nullable();
            $table->integer('total_km')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('code')->nullable();
            $table->string('absen')->nullable();
            $table->string('att')->nullable();
            $table->integer('rit_rfid')->nullable();
            $table->integer('selisih')->nullable();
            $table->string('code2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kdc_s_ims0305s');
    }
};
