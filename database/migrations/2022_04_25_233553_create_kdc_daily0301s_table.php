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
        Schema::create('kdc_daily0301s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ticket_number');
            $table->string('brand');
            $table->string('silo');
            $table->dateTime('date_time');
            $table->integer('tractor');
            $table->string('driver');
            $table->string('vessel1');
            $table->string('vessel2');
            $table->integer('capa1');
            $table->integer('capa2');
            $table->string('company');
            $table->string('silo_2');
            $table->date('tgl_rfid');
            $table->integer('jam');
            $table->string('shift');
            $table->integer('ton');
            $table->string('group');
            $table->date('tgl_tmst');
            $table->float('silodatang')->nullable();
            $table->float('silokeluar')->nullable();
            $table->float('tmctdatang')->nullable();
            $table->float('tmctkeluar')->nullable();
            $table->float('stdload')->nullable();
            $table->float('silotunggu')->nullable();
            $table->float('silotmct')->nullable();
            $table->float('p2hstart')->nullable();
            $table->float('p2hmulai')->nullable();
            $table->float('refuelingstart')->nullable();
            $table->float('refuelingmulai')->nullable();
            $table->float('ishomanstart')->nullable();
            $table->float('ishomanmulai')->nullable();
            $table->float('p5mstart')->nullable();
            $table->float('p5mmulai')->nullable();
            $table->string('p2h')->nullable();
            $table->string('reff')->nullable();
            $table->string('ishoman')->nullable();
            $table->string('p5m')->nullable();
            $table->float('idle')->nullable();
            $table->float('delay')->nullable();
            $table->float('ttlstbb')->nullable();
            $table->integer('qtyvessel1');
            $table->integer('qtyvessel2');
            $table->integer('totalqty');
            $table->string('linkbd');
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
        Schema::dropIfExists('kdc_daily0301s');
    }
};
