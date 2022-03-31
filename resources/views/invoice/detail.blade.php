@extends('adminlte::page')

@section('title', 'Invoice')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content_header')
    <h1>Invoice</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            Invoice ID: {{ $invoice->id }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Customer</dt>
            <dd class="col-sm-9">{{ $invoice->customer->fullname }}</dd>

            <dt class="col-sm-3">Purchase Date</dt>
            <dd class="col-sm-9">{{ $invoice->purchase_date }}</dd>

            <dt class="col-sm-3">Total Items</dt>
            <dd class="col-sm-9">{{ $invoice->number_of_items() }}</dd>

            <dt class="col-sm-3">Total Cost</dt>
            <dd class="col-sm-9">${{ $invoice->total_price() }}</dd>
        </dl>
    </div>
  </div>
</div>
@stop