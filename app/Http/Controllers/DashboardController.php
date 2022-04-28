<?php

namespace App\Http\Controllers;

use App\Models\KdcDaily0301;
use App\Models\KdcSIms0305;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tanggal = '2022-03-01';
        $KdcDaily0301['tonase_shift1'] = KdcDaily0301::where('tgl_rfid', '=', $tanggal)
            ->where('shift', 'I')
            ->sum('ton');
        $KdcDaily0301['tonase_shift2'] = KdcDaily0301::where('tgl_rfid', '=', $tanggal)
            ->where('shift', 'II')
            ->sum('ton');
        $KdcDaily0301['tonase_shift3'] = KdcDaily0301::where('tgl_rfid', '=', $tanggal)
            ->where('shift', 'III')
            ->sum('ton');
        // DB::enableQueryLog();

        $KdcDaily0301['ritasi_shift1'] = KdcDaily0301::where('tgl_rfid', '=', $tanggal)
            ->where('shift', '=', 'I')
            ->count('id');
        $KdcDaily0301['ritasi_shift2'] = KdcDaily0301::where('tgl_rfid', '=', $tanggal)
            ->where('shift', '=', 'II')
            ->count('id');
        $KdcDaily0301['ritasi_shift3'] = KdcDaily0301::where('tgl_rfid', '=', $tanggal)
            ->where('shift', '=', 'III')
            ->count('id');

        // dd(DB::getQueryLog());

        // $KdcSIms0305['tonase_day'] = KdcSIms0305::where('date', '=', $tanggal)
        //     ->where('shift', '=', 'Day')
        //     ->sum('tonase');
        // $KdcSIms0305['tonase_night'] = KdcSIms0305::where('date', '=', $tanggal)
        //     ->where('shift', '=', 'Night')
        //     ->sum('tonase');

        // $KdcSIms0305['ritasi_day'] = KdcSIms0305::where('date', '=', $tanggal)
        //     ->where('shift', '=', 'Day')
        //     ->count('id');
        // $KdcSIms0305['ritasi_night'] = KdcSIms0305::where('date', '=', $tanggal)
        //     ->where('shift', '=', 'Night')
        //     ->count('id');

        // $KdcSIms0305['hm_day'] = KdcSIms0305::where('date', '=', $tanggal)
        //     ->where('shift', '=', 'Day')
        //     ->sum('jam');
        // $KdcSIms0305['hm_night'] = KdcSIms0305::where('date', '=', $tanggal)
        //     ->where('shift', '=', 'Night')
        //     ->sum('jam');

        // dd($KdcDailyCoalgetting);
        return view('dashboard', compact('KdcDaily0301', 'tanggal'));
    }
}
