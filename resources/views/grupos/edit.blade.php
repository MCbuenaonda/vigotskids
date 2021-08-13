@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('grupos.index') }}" class="btn btn-primary">Regresar</a>
        </div>

        <div class="card">
            <div class="card-body p-5">
                <form action="{{ route('grupos.update', [ 'grupo' => $grupo->id ]) }}" method="POST" novalidate>
                    @csrf

                    <fieldset class="border p-4">
                        <legend class="text-primary">Editar grupo</legend>

                        <div class="form-group">
                            <label for="nombre">Nombre de grupo</label>
                            <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $grupo->nombre }}">
                            @error('nombre')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="curso">Curso</label>
                            <select name="curso_id" id="curso" class="form-control @error('curso_id') is-invalid @enderror">
                                <option value="" selected disabled>-- Seleccione --</option>
                                @foreach($cursos as $key => $curso)
                                    <option value="{{ $curso->id }}" {{ $grupo->curso_id == $curso->id ? 'selected' : '' }}>{{ $curso->nombre }}</option>
                                @endforeach
                            </select>

                            @error('curso_id')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ $grupo->fecha }}">
                            @error('fecha')
                                <div class="invalid-feedback animate__animated animate__flash">{{$message}}</div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Editar Grupo</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
