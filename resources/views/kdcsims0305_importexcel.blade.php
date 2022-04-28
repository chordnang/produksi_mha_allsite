@extends('adminlte::page')

@section('title', 'Import Excel')

@section('content_header')

@stop

@section('content')
<br>

<div class="card">
    <div class="card-header">
        Import Excel KDC SIMS 0305
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif

        <form action="/kdcsims0305/import" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="file" name="file" />
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </div>
</div>


@stop

@section('css')

@stop

@section('js')

@stop