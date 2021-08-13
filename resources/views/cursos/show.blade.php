@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('cursos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Curso</legend>
                     <h3>{{$curso->nombre}}</h3>
                     <h3>{{$curso->siglas}}</h3>
                     <h3>{{$curso->precio}}</h3>
                </fieldset>

                <fieldset class="border p-4 m-4">
                    <legend class="text-primary">Grupos del curso</legend>

                    <div class="list-group">
                        @foreach($curso->grupos as $key => $curso)
                            <a href="#" class="list-group-item list-group-item-action">
                                <h4>{{$curso->nombre}} - {{$curso->fecha}}</h4>
                            </a>
                        @endforeach
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
