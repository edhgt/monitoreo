@extends('adminlte::page')

@section('title', 'Crear dispositivo')

@section('content_header')
    <h1>Crear dispositivo</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('dispositivos.index')}}">Regresar</a>

{!! Form::open(['url' => route('dispositivos.store')]) !!}
{!! Form::label('nombre', 'Nombre') !!}
{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
@stop
