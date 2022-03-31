@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $equipment->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">${{ $equipment->price }}</dd>

            <dt class="col-sm-3">Manufacturer</dt>
            <dd class="col-sm-9">
                <a href="{{ route('manufacturer.show',['manufacturer'=>$equipment->manufacturer->id]) }}">
                    {{ $equipment->manufacturer->name }}
                </a>
            </dd>

            <dt class="col-sm-3">GHz</dt>
            <dd class="col-sm-9">{{ $equipment->ram }}</dd>

            <dt class="col-sm-3">Ram</dt>
            <dd class="col-sm-9">{{ $equipment->gpu }}</dd>

            <dt class="col-sm-3">Category</dt>
            <dd class="col-sm-9">{{ ucwords($equipment->category) }}</dd>
        </dl>
    </div>
  </div>
</div>
@stop