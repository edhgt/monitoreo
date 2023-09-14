@extends('adminlte::page')

@section('title', 'Tipo de mediciones')

@section('content_header')
    <h1>Tipo de mediciones</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('tipo-mediciones.create')}}">Agregar dispositivo</a>
@if (session('status'))
<div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
  <strong>¡Información!</strong> {{ session('status') }}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if($items->count() > 0)
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
        @foreach($items as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->nombre }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('tipo-mediciones.edit', $item->id) }}">
              <i class="fas fa-edit fa-lg"></i>
            </a>
            {!! Form::open(['method' => 'delete', 'url' => route('tipo-mediciones.destroy', $item->id)]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $items->links("pagination::bootstrap-4") }}
  </div>
</div>
@else
<div class="alert alert-info">
  No hay dispositivos
</div>
@endif
@stop
