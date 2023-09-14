@extends('adminlte::page')

@section('title', 'Modificar tipo de medición')

@section('content_header')
    <h1>Modificar tipo de medición</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('tipo-mediciones.index')}}">Regresar</a>

{!! Form::model($item, ['method' => 'put', 'url' => route('tipo-mediciones.update', $item->id)]) !!}
{!! Form::label('nombre', 'Nombre') !!}
{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
{!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
@stop
