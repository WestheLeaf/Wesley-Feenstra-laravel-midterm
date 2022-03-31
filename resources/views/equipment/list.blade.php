@extends('adminlte::page')

@section('title', 'Equipments')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 40px">ID#</th><th>Name</th><th>Manufacturer</th><th>Category</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($equipments AS $equipment)
        <tr>
          <td>{{ $equipments->id }}</td>
          <td>{{ $equipments->name }}</td>
          <td>{{ $manufacturers->name }}</td>
          <td>{{ $equipments->category }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipment.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipment.create') }} " class="btn btn-primary" >Create</a>
@stop