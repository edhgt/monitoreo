@extends('adminlte::page')

@section('content')
@php
/*
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-body">
                    {!! $chart->container() !!}
                </div>
            </div> -->
        </div>
    </div>
</div>
*/
@endphp
<div class="container mt-2">
    @foreach($dashboards as $dashboard)
        <h2>{{ $dashboard->title }}</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ $dashboard->url }}" allowfullscreen></iframe>
        </div>
        <hr>
    @endforeach
</div>
@endsection

@php
/*
<!-- @section('js')
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endsection -->*/
@endphp