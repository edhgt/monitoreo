@extends('adminlte::page')

@section('title', 'Crear tipo de medición')

@section('content_header')
    <h1>Crear tipo de medición</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('tipo-mediciones.index')}}">Regresar</a>

{!! Form::open(['url' => route('tipo-mediciones.store')]) !!}
{!! Form::label('nombre', 'Nombre') !!}
{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
@stop
