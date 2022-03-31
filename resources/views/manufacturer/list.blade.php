@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 40px">ID#</th><th>Sales #</th><th>Tech #</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacturers AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->sales_phone }}</td>
          <td>{{ $manufacturer->tech_phone }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturer.show',['manufacturer'=>$manufacturer->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturer.create') }} " class="btn btn-primary" >Create</a>
@stop