<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KdcDaily0301 extends Model
{
    use HasFactory;


    protected $fillable =
        [
            'ticket_number',
            'brand',
            'silo',
            'date_time',
            'tractor',
            'driver',
            'vessel1',
            'vessel2',
            'capa1',
            'capa2',
            'company',
            'silo_2',
            'tgl_rfid',
            'jam',
            'shift',
            'ton',
            'group',
            'tgl_tmst',
            'silodatang',
            'silokeluar',
            'tmctdatang',
            'tmctkeluar',
            'stdload',
            'silotunggu',
            'silotmct',
            'p2hstart',
            'p2hmulai',
            'refuelingstart',
            'refuelingmulai',
            'ishomanstart',
            'ishomanmulai',
            'p5mstart',
            'p5mmulai',
            'p2h',
            'reff',
            'ishoman',
            'p5m',
            'idle',
            'delay',
            'ttlstbb',
            'qtyvessel1',
            'qtyvessel2',
            'totalqty',
            'linkbd'
        ];
    protected $guarded = false;
}
