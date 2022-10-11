@extends('layout/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Agregar nueva persona</h2>
                <form action="{{ route('personas.store') }}" method="POST">
                    @csrf
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" class="form-control" name="paterno" id="paterno">
                    <label for="materno">Apellido materno</label>
                    <input type="text" class="form-control" name="materno" id="materno">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                    <button class="btn btn-primary mt-3">Guardar</button>
                    <a href="{{ route('personas.index') }}" class="btn btn-info mt-3">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>
    
@endsection