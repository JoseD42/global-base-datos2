@extends('layout')
@section('content')
  <body>
    <div class="container">
    <h1 class="bg-primary text-white text-center mb-3">CRUD con Laravel EJ. PARCIAL</h1>


    <div class="container">
              
        <h2>CREAR REGISTROS</h2>

              <form action="" method="POST">
                  
                <div class="mb-3">
                  <label for="" class="form-label">Código</label>
                  <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Descripción</label>
                  <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Cantidad</label>
                  <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Precio</label>
                  <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
                </div>
                <a href="/notas" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
              </form>
    </div>
    </div>
@endsection