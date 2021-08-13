@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Dashoard</h1>
        <hr>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->cursos['total'] }} Cursos</h4>
                            <donut-chart info="{{ $data->cursos['data'] }}" label="Cursos"></donut-chart>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->grupos['total'] }} Grupos</h4>
                            <bar-chart-y info="{{ $data->grupos['data'] }}" label="Grupos"></bar-chart-y>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->alumnos['total'] }} Alumnos</h4>
                            <donut-chart info="{{ $data->alumnos['data'] }}" label="Alumnos"></donut-chart>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Grupos por curso</h4>
                            <bar-chart title-id="gruposcurso" info="{{ $data->cursosgrupos['data'] }}" labels="{{ $data->cursosgrupos['labels'] }}" bg-color="{{ $data->cursosgrupos['bgcolor'] }}" bd-color="{{ $data->cursosgrupos['bdcolor'] }}"></bar-chart>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Alumnos por Grupo</h4>
                            <bar-chart title-id="alumnosgrupo" info="{{ $data->gruposalumnos['data'] }}" labels="{{ $data->gruposalumnos['labels'] }}" bg-color="{{ $data->gruposalumnos['bgcolor'] }}" bd-color="{{ $data->gruposalumnos['bdcolor'] }}"></bar-chart>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

