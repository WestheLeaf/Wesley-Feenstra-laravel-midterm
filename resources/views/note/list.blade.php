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
          <th style="width: 40px">ID#</th><th>Service</th><th>Software</th><th>Content</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->service }}</td>
          <td>{{ $note->software }}</td>
          <td>{{ $note->content }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('note.create') }} " class="btn btn-primary" >Create</a>
@stop