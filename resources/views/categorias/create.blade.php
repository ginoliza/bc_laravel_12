@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Nueva Categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre de la Categoría:</label>
                <input type="text" name="nombre" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">Guardar</button>
            <a href="{{ route('categorias.index') }}" class="inline-block mt-4 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancelar</a>
        </form>
    </div>
</div>
@endsection