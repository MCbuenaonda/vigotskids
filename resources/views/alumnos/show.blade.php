@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Alumno</legend>
                     <h3>{{$alumno->nombre}} {{$alumno->ap_paterno}} {{$alumno->ap_materno}}</h3>
                </fieldset>

                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Clave</legend>
                     <h3>{{$alumno->clave}}</h3>
                </fieldset>

                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Grupos del alumno</legend>

                    <div class="list-group">
                        @foreach($alumno->grupos as $key => $grupo)
                            <a href="#" class="list-group-item list-group-item-action">
                                <h4>{{$grupo->nombre}} - {{$grupo->fecha}} | {{$grupo->curso->nombre}}</h4>
                            </a>
                        @endforeach
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
