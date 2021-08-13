@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <a href="{{ route('grupos.create') }}" class="btn btn-primary">Nuevo grupo</a>
        </div>

        <h2 class="my-5">Listado de Grupos</h2>

        <div class="container bg-white p-4">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Curso</th>
                                <th>Estatus</th>
                                <th>Alumnos</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($grupos as $key => $grupo)
                                <tr>
                                    <td scope="row">{{ $grupo->nombre }}</td>
                                    <td>{{ $grupo->fecha }}</td>
                                    <td>{{ $grupo->curso->nombre }}</td>
                                    <td>{{ $grupo->status->nombre }}</td>
                                    <td>
                                        @if ($grupo->status_id > 1)
                                            <svg class="w-6 h-6" style="width: 15px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                            <span class="text-justify-center">
                                                {{ count($grupo->alumnos) }}
                                            </span>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('grupos.assign', ['grupo' => $grupo->id]) }}" class="btn btn-outline-primary">
                                                + Alumnos
                                            </a>
                                        @else
                                            <activar-grupo grupo-id={{$grupo->id}}></activar-grupo>
                                        @endif

                                    </td>
                                    <td class="justify-text-center text-center">
                                        <a href="{{ route('grupos.show', ['grupo' => $grupo->id ]) }}" class="btn btn-dark">Ver</a>

                                        @if ($grupo->status_id == 1)
                                            <a href="{{ route('grupos.edit', ['grupo' => $grupo->id ]) }}" class="btn btn-info">Editar</a>
                                            <eliminar-grupo grupo-id={{$grupo->id}}></eliminar-grupo>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="col-12 mt-4 justify-content-center d-flex">
                        {{$grupos->links()}}
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
