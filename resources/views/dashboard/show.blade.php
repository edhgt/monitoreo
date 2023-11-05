@extends('adminlte::page')

@section('template_title')
    {{ $dashboard->name ?? "{{ __('Show') Dashboard" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dashboard</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dashboards.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $dashboard->title }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $dashboard->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
