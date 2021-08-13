@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('cursos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <form action="{{ route('cursos.store') }}" method="POST" novalidate>
                    @csrf

                    <fieldset class="border p-4">
                        <legend class="text-primary">Crear un nuevo curso</legend>

                        <div class="form-group">
                            <label for="nombre">Nombre de curso</label>
                            <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                            @error('nombre')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="siglas">Siglas de curso</label>
                            <input type="text" onkeyup="this.value = this.value.toUpperCase();" id="siglas" name="siglas" class="form-control @error('siglas') is-invalid @enderror" value="{{ old('siglas') }}">
                            @error('siglas')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio del curso</label>
                            <input type="text" id="precio" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio') }}">
                            @error('precio')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Crear Curso</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
