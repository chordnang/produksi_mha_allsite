@extends('adminlte::page')

@section('title', 'Data Excel')

@section('content_header')

@stop

@section('content')
    <div class="pt-2">
        <x-adminlte-card title="Produksi 0301 Kideco BKJ">
            <x-slot name="toolsSlot">
                <h3 class="card-title mr-2">{{ date('d/M/Y', strtotime($tanggal)) }}</h3>
            </x-slot>


            <div class="row">
                <div class="col-xl-6">
                    <x-adminlte-card title="Tonase" theme-mode="outline">
                        <canvas id="tonase_kdc" height="200"></canvas>
                    </x-adminlte-card>
                </div>
                <div class="col-xl-6">
                    <x-adminlte-card title="Ritasi" theme-mode="outline">
                        <canvas id="ritasi_kdc" height="200"></canvas>
                    </x-adminlte-card>
                </div>
            </div>
        </x-adminlte-card>
    </div>
    <div class="pt-2">
        <x-adminlte-card title="Produksi 0305 SIMS KDC">
            <x-slot name="toolsSlot">
                <h3 class="card-title mr-2">{{ date('d/M/Y', strtotime($tanggal)) }}</h3>
            </x-slot>


            <div class="row">
                <div class="col-xl-4">
                    <x-adminlte-card title="Tonase DT & EXA" theme-mode="outline">
                        <canvas id="tonase_coalgetting" height="300"></canvas>
                    </x-adminlte-card>
                </div>
                <div class="col-xl-4">
                    <x-adminlte-card title="Ritasi" theme-mode="outline">
                        <canvas id="ritasi_coalgetting" height="300"></canvas>
                    </x-adminlte-card>
                </div>
                <div class="col-xl-4">
                    <x-adminlte-card title="HM" theme-mode="outline">
                        <canvas id="hm_coalgetting" height="300"></canvas>
                    </x-adminlte-card>
                </div>
            </div>
        </x-adminlte-card>
    </div>
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

      
    @endpush
@stop

@section('css')

@stop

@section('js')

@stop
