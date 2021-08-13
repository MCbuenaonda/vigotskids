@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('cursos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <form action="{{ route('cursos.add') }}" method="POST" novalidate>
                    @csrf

                    <fieldset class="border p-4">
                        <legend class="text-primary">Asigna un grupo al curso</legend>

                        <div class="form-group">
                            <label for="nombre">Nombre de curso</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $curso->nombre }}" readonly>
                        </div>

                        {{-- <grupos-select grupos={{$grupos}} inscritos={{$curso->grupos}}></grupos-select> --}}
                        <grupos-select grupos="{{$grupos}}" inscritos="{{$curso->grupos}}"></grupos-select>

                        <button class="btn btn-primary" type="submit">Asignar Alumno</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
