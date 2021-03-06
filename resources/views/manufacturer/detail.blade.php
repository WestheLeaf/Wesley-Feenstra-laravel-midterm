@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $manufacturer->name }}
        </div>
        <dl class="row">

            <dt class="col-sm-3">Tech Phone Number</dt>
            <dd class="col-sm-9">{{ $manufacturer->tech_phone }}</dd>

            <dt class="col-sm-3">Sales Phone Number</dt>
            <dd class="col-sm-9">{{ $manufacturer->sales_phone }}</dd>
        </dl>
    </div>
  </div>
</div>
@stop