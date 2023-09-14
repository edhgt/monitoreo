@extends('adminlte::page')

@section('title', 'Modificar dispositivo')

@section('content_header')
    <h1>Modificar dispositivo</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('dispositivos.index')}}">Regresar</a>

{!! Form::model($dispositivo, ['method' => 'put', 'url' => route('dispositivos.update', $dispositivo->id)]) !!}
{!! Form::label('nombre', 'Nombre') !!}
{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
{!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
@stop
