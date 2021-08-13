@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('grupos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <form action="{{ route('grupos.add', [ 'grupo' => $grupo->id ]) }}" method="POST" novalidate>
                    @csrf

                    <fieldset class="border p-4">
                        <legend class="text-primary">Asigna un alumno al grupo</legend>

                        <div class="form-group">
                            <label for="nombre">Nombre de grupo</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $grupo->nombre }}" readonly>
                        </div>

                        <alumnos-select alumnos={{$alumnos}} inscritos={{$grupo->alumnos}}></alumnos-select>

                        <button class="btn btn-primary" type="submit">Asignar Alumno</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
