@extends('layout/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Crud con laravel 8 v1</h2>
                <a href="{{ route('personas.create') }}" class="btn btn-primary">
                    Agregar nueva persona
                </a>
                <hr>
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->paterno }}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>
                                <a href="{{ route('personas.edit', $item->id) }}" 
                                class="btn btn-warning">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('personas.destroy', $item->id) }}" 
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button> 
                                </form>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection