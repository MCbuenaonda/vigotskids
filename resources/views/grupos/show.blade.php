@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('grupos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Grupo</legend>
                     <h3>{{$grupo->nombre}}</h3>
                </fieldset>

                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Curso al que pertenece</legend>
                     <h3>{{$grupo->curso->nombre}}</h3>
                </fieldset>

                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Alumnos</legend>

                    <div class="list-group">
                        @foreach($grupo->alumnos as $key => $alumno)
                            <a href="#" class="list-group-item list-group-item-action">
                                <h4>{{$alumno->nombre}} {{$alumno->ap_paterno}} {{$alumno->ap_materno}}</h4>
                            </a>
                        @endforeach
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
