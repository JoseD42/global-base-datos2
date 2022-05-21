@extends('layout')
@section('content')
  <body>
    <div class="container">
    <h1 class="bg-primary text-white text-center mb-3">CRUD con Laravel EJ. PARCIAL</h1>


    <div class="container">
        
        <a href="/agregar" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @forelse($notas as $nota)
    <tr>
        <td>{{$nota->id}}</td>
        <td>{{$nota->codigo}}</td>
        <td>{{$nota->descripcion}}</td>
        <td>{{$nota->cantidad}}</td>
        <td>{{$nota->precio}}</td>
        <td>
         <form method="POST" action="{{ url("notas/{$nota->id}") }}">
          <a href="{{ route('notas.edit', ['id' => $nota->id]) }}" class="btn btn-info">Editar</a>
          @csrf
          @method('DELETE')         
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @empty
    @endforelse
  </tbody>
</table>

    </div>
    </div>
@endsection    