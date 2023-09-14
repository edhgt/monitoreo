@extends('adminlte::page')

@section('title', 'Dispositivos')

@section('content_header')
    <h1>Dispositivos</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('dispositivos.create')}}">Agregar dispositivo</a>
@if (session('status'))
<div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
  <strong>¡Información!</strong> {{ session('status') }}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if($dispositivos->count() > 0)
<div class="row bg-white mt-5">
  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($dispositivos as $dispositivo)
        <tr>
          <th scope="row">{{ $dispositivo->id }}</th>
          <td>{{ $dispositivo->nombre }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('dispositivos.edit', $dispositivo->id) }}">
              <i class="fas fa-edit fa-lg"></i>
            </a>
            {!! Form::open(['method' => 'delete', 'url' => route('dispositivos.destroy', $dispositivo->id)]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $dispositivos->links("pagination::bootstrap-4") }}
  </div>
</div>
@else
<div class="alert alert-info">
  No hay dispositivos
</div>
@endif
@stop
