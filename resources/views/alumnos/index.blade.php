@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Nuevo alumno</a>
        </div>

        <h2 class="my-5">Listado de Alumnos</h2>

        <div class="container bg-white p-4">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Clave</th>
                                <th>Inscrito en</th>
                                <th>Activo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $key => $alumno)
                                <tr>
                                    <td scope="row">{{ $alumno->nombre . ' ' . $alumno->ap_paterno . ' ' . $alumno->ap_materno }}</td>
                                    <td>{{ $alumno->clave }}</td>
                                    <td>
                                        @if (count($alumno->grupos) > 0)
                                            <span>{{ count($alumno->grupos) }} grupos</span>
                                        @else
                                            <span> - </span>
                                        @endif
                                    </td>
                                    <td>{{ $alumno->activo }}</td>
                                    <td class="justify-text-center text-center">
                                        <a href="{{ route('alumnos.show', ['alumno' => $alumno->id]) }}" class="btn btn-dark"> Ver </a>
                                        <a href="{{ route('alumnos.edit', ['alumno' => $alumno->id]) }}" class="btn btn-info"> Editar </a>
                                        @if (count($alumno->grupos) == 0)
                                            <eliminar-alumno alumno-id={{$alumno->id}}></eliminar-alumno>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="col-12 mt-4 justify-content-center d-flex">
                        {{$alumnos->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
