@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Gestión de Páginas</h1>
        <a href="/dashboard" class="bg-gray-500 hover:bg-gray-600 text-white p-2 rounded">
            Volver al Panel
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Crear Nueva Página</h2>
        
        <form action="/pages" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 mb-2">Título</label>
                <input type="text" name="title" id="title" class="border p-2 rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="slug" class="block text-gray-700 mb-2">Slug (opcional)</label>
                <input type="text" name="slug" id="slug" class="border p-2 rounded w-full">
                <p class="text-sm text-gray-500 mt-1">Si se deja en blanco, se generará automáticamente a partir del título</p>
            </div>
            
            <div class="mb-4">
                <label for="content" class="block text-gray-700 mb-2">Contenido</label>
                <textarea name="content" id="content" class="border p-2 rounded w-full" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white p-2 rounded">
                Crear
            </button>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">Páginas Existentes</h2>
        
        <div class="mt-4">
            <!-- Placeholder para la lista de páginas -->
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">ID</th>
                        <th class="py-2 px-4 border-b text-left">Título</th>
                        <th class="py-2 px-4 border-b text-left">Slug</th>
                        <th class="py-2 px-4 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán las páginas dinámicamente -->
                    <tr>
                        <td class="py-2 px-4 border-b text-gray-500" colspan="4">No hay páginas disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection