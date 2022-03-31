@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">ID#</th><th>Customer</th><th>Items</th><th>Price</th><th>Purchase Date</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notes AS $note)
        <tr>
          <td>{{ $invoice->id }}</td>
          <td>{{ $customers->customer_id }}</td>
          <td>{{ $equipments->name }}</td>
          <td>{{ $equipments->price }}</td>
          <td>{{ $invoice->purchase_date }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('note.show',['note'=>$note->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('invoice.create') }} " class="btn btn-primary" >Create</a>
@stop