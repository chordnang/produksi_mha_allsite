<?php

namespace App\Http\Controllers;

use App\Models\KdcSIms0305;
use App\Models\KdcDaily0301;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToArray;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // DB::enableQueryLog();
        // dd(DB::getQueryLog());
        $tanggal = '2022-03-15';
        $bulan = '3';
        $tahun = '2022';
        $KdcDaily0301['prod_mtd'] = KdcDaily0301::whereMonth('tgl_rfid', '=', $bulan)
            ->sum('ton');
        $KdcDaily0301['prod_period'] = KdcDaily0301::whereYear('tgl_rfid', '=', $tahun)
            ->sum('ton');
        $KdcDaily0301['avg_rit_day'] = KdcDaily0301::select(DB::raw('count(*)as count'))
            ->where('tgl_rfid', '=', $tanggal)
            ->groupBy('tractor')
            ->get()
            ->avg('count');
        $KdcDaily0301['avg_ton_day'] = KdcDaily0301::select(DB::raw('sum(ton)as sum'))
            ->where('tgl_rfid', '=', $tanggal)
            ->groupBy('tractor')
            ->get()
            ->avg('sum');

        $KdcDaily0301['prod_hourly'] = KdcDaily0301::select(DB::raw('sum(ton) as sum_ton, HOUR(date_time) as hour'))
            ->where('tgl_rfid', '=', $tanggal)
            ->groupBy('hour')
            ->get()
            ->ToArray();
        $KdcDaily0301['prod_unit'] = KdcDaily0301::select(DB::raw('sum(ton)as sum_ton,tractor'))
            ->where('tgl_rfid', '=', $tanggal)
            ->groupBy('tractor')
            ->get()
            ->toArray();

        $tanggal2 = '2022-03-01';
        $KdcSIms0305['prod_mtd'] = KdcSIms0305::whereMonth('tanggal', '=', $bulan)
            ->sum('capacity');
        $KdcSIms0305['prod_period'] = KdcSIms0305::whereYear('tanggal', '=', $tahun)
            ->sum('capacity');
        $KdcSIms0305['avg_rit_day'] = KdcSIms0305::select(DB::raw('count(*)as count'))
            ->where('tanggal', '=', $tanggal2)
            ->groupBy('dump_truck')
            ->get()
            ->avg('count');
        $KdcSIms0305['avg_ton_day'] = KdcSIms0305::select(DB::raw('sum(capacity)as sum'))
            ->where('tanggal', '=', $tanggal2)
            ->groupBy('dump_truck')
            ->get()
            ->avg('sum');

        $KdcSIms0305['prod_hourly'] = KdcSIms0305::select(DB::raw('sum(capacity) as sum_ton, HOUR(date_time) as hour'))
            ->where('tanggal', '=', $tanggal2)
            ->groupBy('hour')
            ->get()
            ->ToArray();
        $KdcSIms0305['prod_unit'] = KdcSIms0305::select(DB::raw('sum(capacity)as sum_ton,dump_truck'))
            ->where('tanggal', '=', $tanggal2)
            ->groupBy('dump_truck')
            ->get()
            ->toArray();

        dd($KdcSIms0305);
        return view('dashboard', compact('Kdc0301', 'tanggal'));
    }
}
