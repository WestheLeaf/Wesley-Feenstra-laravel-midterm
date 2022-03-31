@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            Note for {{ $note->equipments->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Service</dt>
            <dd class="col-sm-9">{{ $note->service }}</dd>

            <dt class="col-sm-3">Software</dt>
            <dd class="col-sm-9">
                    {{ $note->software }}

            </dd>
            <dt class="col-sm-3">Content</dt>
            <dd class="col-sm-9">{{ $note->content }}</dd>

        </dl>
    </div>
  </div>
</div>
@stop