@extends('adminlte::page')

@section('title', 'Invoices')

@section('content_header')
    <h1>Invoice</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 40px">ID#</th><th>Customer</th><th>Items</th><th>Price</th><th>Purchase Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($invoices AS $invoice)
        <tr>
          <td>{{ $invoice->id }}</td>
          <td>{{ $invoice->customer->customer_id }}</td>
          <td>{{ $invoice->equipment->name }}</td>
          <td>{{ $invoice->equipment->price }}</td>
          <td>{{ $invoice->purchase_date }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('invoice.create') }} " class="btn btn-primary" >Create</a>
@stop