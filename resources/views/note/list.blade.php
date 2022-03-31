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
          <th style="width: 40px">ID#</th><th>Service</th><th>Software</th><th>Content</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notes AS $note)
        <tr>
          <td>{{ $notes->id }}</td>
          <td>{{ $notes->service }}</td>
          <td>{{ $notes->software }}</td>
          <td>{{ $notes->content }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('note.show',['note'=>$note->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('invoice.create') }} " class="btn btn-primary" >Create</a>
@stop