@extends('layout/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Editar persona</h2>
                <form action="{{ route('personas.update', $item->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" class="form-control" name="paterno" 
                    id="paterno" value="{{ $item->paterno }}">
                    <label for="materno">Apellido materno</label>
                    <input type="text" class="form-control" name="materno" 
                    id="materno" value="{{ $item->materno }}">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" 
                    id="nombre" value="{{ $item->nombre }}">
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="{{ route('personas.index') }}" class="btn btn-info mt-3">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>
    
@endsection