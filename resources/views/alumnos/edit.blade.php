@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <form action="{{ route('alumnos.update', ['alumno' => $alumno->id]) }}" method="POST" novalidate>
                    @csrf

                    <fieldset class="border p-4">
                        <legend class="text-primary">Registrar alumno</legend>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $alumno->nombre }}">
                            @error('nombre')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ap_paterno">Apellido paterno</label>
                            <input type="text" id="ap_paterno" name="ap_paterno" class="form-control @error('ap_paterno') is-invalid @enderror" value="{{ $alumno->ap_paterno }}">
                            @error('ap_paterno')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ap_materno">Apellido materno</label>
                            <input type="text" id="ap_materno" name="ap_materno" class="form-control @error('ap_materno') is-invalid @enderror" value="{{ $alumno->ap_materno }}">
                            @error('ap_materno')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="clave">Clave</label>
                            <input type="text" id="clave" name="clave" class="form-control @error('clave') is-invalid @enderror" value="{{ $alumno->clave }}">
                            @error('clave')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Editar Alumno</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
