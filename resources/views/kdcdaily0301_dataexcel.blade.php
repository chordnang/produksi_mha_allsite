@extends('adminlte::page')

@section('title', 'Data Excel')

@section('content_header')

@stop

@section('content')
    <br>
    <x-adminlte-card title="Data Excel KDC Daily 0301" theme="dark" icon="fas fa-lg fa-table">
        {{-- Setup data for datatables --}}
        @php
            $heads = [
                'Ticket Number',
                'Brand',
                'Silo',
                'Date_time',
                'Tractor',
                'Driver',
                'Vessel1',
                'Vessel2',
                'Capa1',
                'Capa2',
                'Company',
                'Silo',
                'Tanggal RFID',
                'Jam',
                'Shift',
                'Ton',
                'Grup',
                'Tanggal TMST',
                // ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            ];
            
            $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class="fa fa-lg fa-fw fa-pen"></i>
        </button>';
            $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>';
            $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
            <i class="fa fa-lg fa-fw fa-eye"></i>
        </button>';
            
            $config = [
                // 'data' => [
                // [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                // [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                // [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                // ],
                'data' => $json_data_kdcdaily0301,
                'order' => [[1, 'asc']],
                'columns' => [null, null, null, ['orderable' => false]],
            ];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table1" :heads="$heads">
            @foreach ($config['data'] as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>
            @endforeach
        </x-adminlte-datatable>

        {{-- Compressed with style options / fill data using the plugin config --}}
        <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config" striped hoverable bordered
            compressed />
    </x-adminlte-card>
@stop

@section('css')

@stop

@section('js')

@stop
