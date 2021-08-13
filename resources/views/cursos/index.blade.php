@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('cursos.create') }}" class="btn btn-primary">Nuevo Curso</a>
        </div>

        <h2 class="my-5">Listado de Cursos</h2>

        <div class="container bg-white p-4">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Siglas</th>
                                <th>Grupos</th>
                                <th>Precio</th>
                                <th>Activo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cursos as $key => $curso)
                                <tr>
                                    <td scope="row">{{ $curso->nombre }}</td>
                                    <td>{{ $curso->siglas }}</td>
                                    <td>{{ count($curso->grupos) }}</td>
                                    <td>{{ $curso->precio }}</td>
                                    <td>
                                        @if ($curso->activo == 1)
                                            <span class="text-success">Activo</span>
                                        @else
                                            <activar-curso curso-id={{$curso->id}}></activar-curso>
                                        @endif
                                    </td>
                                    <td class="justify-text-center text-center">
                                        <a href="{{ route('cursos.show', ['curso' => $curso->id ]) }}" class="btn btn-dark">Ver</a>

                                        @if ($curso->activo == 0)
                                            <a href="{{ route('cursos.edit', ['curso' => $curso->id ]) }}" class="btn btn-info">Editar</a>
                                            <eliminar-curso curso-id={{$curso->id}}></eliminar-curso>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="col-12 mt-4 justify-content-center d-flex">
                        {{$cursos->links()}}
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
