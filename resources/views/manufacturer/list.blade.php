@extends('adminlte::page')

@section('title', 'Manufacturers')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 40px">ID#</th><th>Sales #</th><th>Tech #</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacturers AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->sales_phone }}</td>
          <td>{{ $manufacturer->tech_phone }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturer.create') }} " class="btn btn-primary" >Create</a>
@stop