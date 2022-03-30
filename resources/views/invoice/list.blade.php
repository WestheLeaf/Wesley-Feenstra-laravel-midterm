@extends('adminlte::page')

@section('title', 'Invoice')

@section('content_header')
    <h1>Invoice</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($invoices AS $invoice)
        <tr>
          <td>{{ $invoice->id }}</td>
          <td>{{ $invoice->purchase_date }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('invoice.show',['invoice'=>$invoice->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('invoice.create') }} " class="btn btn-primary" >Create</a>
@stop