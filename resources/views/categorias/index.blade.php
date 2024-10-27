@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
  <div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Categorías</h1>
    <!-- boton  -->
    <a href="{{ route('categorias.create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded inline-block mb-4">Nueva Categoría</a><br>

    <!-- lista -->
    <ul class="list-disc pl-5 space-y-2">
      @foreach ($categorias as $categoria)
      <li class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded-lg">
        <!-- nombre de la categoria -->
        <span>{{ $categoria->nombre }}</span>
        <!-- acciones -->
        <div>
          <a href="{{ route('categorias.edit', $categoria) }}" class="mr-2 px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Editar</a>
          <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
              Eliminar
            </button>
          </form>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection