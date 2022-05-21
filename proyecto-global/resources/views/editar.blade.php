@extends('layout')
@section('content')
  <body>
    <div class="container">
    <h1 class="bg-primary text-white text-center mb-3">CRUD con Laravel EJ. PARCIAL</h1>


    <div class="container">

      <h2>EDITAR REGISTROS</h2>

          <form method="POST" action="{{ url("notas/{$notas->id}/editar") }}">
            @csrf  
            @method('PUT')
            <div class="mb-3">
              <label for="" class="form-label">Código</label>
              <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $notas->codigo }}">    
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Descripción</label>
              <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $notas->descripcion }}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Cantidad</label>
              <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{ $notas->cantidad }}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Precio</label>
              <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{ $notas->precio }}">
            </div>
            <a href="/notas" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        


    </div>
    </div>
@endsection