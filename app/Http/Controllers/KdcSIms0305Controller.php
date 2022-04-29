<?php

namespace App\Http\Controllers;

use App\Models\KdcSIms0305;
use Illuminate\Http\Request;
use App\Imports\KdcSims0305Import;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreKdcSIms0305Request;
use App\Http\Requests\UpdateKdcSIms0305Request;

class KdcSIms0305Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKdcSIms0305Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKdcSIms0305Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KdcSIms0305  $kdcSIms0305
     * @return \Illuminate\Http\Response
     */
    public function show(KdcSIms0305 $kdcSIms0305)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KdcSIms0305  $kdcSIms0305
     * @return \Illuminate\Http\Response
     */
    public function edit(KdcSIms0305 $kdcSIms0305)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKdcSIms0305Request  $request
     * @param  \App\Models\KdcSIms0305  $kdcSIms0305
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKdcSIms0305Request $request, KdcSIms0305 $kdcSIms0305)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KdcSIms0305  $kdcSIms0305
     * @return \Illuminate\Http\Response
     */
    public function destroy(KdcSIms0305 $kdcSIms0305)
    {
        //
    }

    public function excel_import()
    {
        return view('kdcsims0305_importexcel');
    }
    public function excel_store(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new KdcSims0305Import, $file);

        return back()->withStatus('Excel file import berhasil!');
    }

    public function excel_data()
    {
        clock($data_kdcsims0305 = KdcSIms0305::select(
            'ticket_no',
            'company',
            'room',
            'date_time',
            'dump_truck',
            'pit',
            'area',
            'seam',
            'excavator',
            'capacity',
            'coal_brand',
            'penalty',
            'tanggal',
            'shift',
            'jam',
        )
            // ->where('date', '=', '2022-03-01')
            ->get()->toArray());


        json_encode($data_kdcsims0305);
        return view('kdcsims0305_dataexcel', ['json_data_kdcsims0305' => $data_kdcsims0305]);
    }
}
