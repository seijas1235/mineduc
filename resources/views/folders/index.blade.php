@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Gestión de Carpetas</h1>
        <a href="/dashboard" class="bg-gray-500 hover:bg-gray-600 text-white p-2 rounded">
            Volver al Panel
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Crear Nueva Carpeta</h2>
        
        <form action="/folders" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-2">Nombre de la Carpeta</label>
                <input type="text" name="name" id="name" class="border p-2 rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 mb-2">Descripción (opcional)</label>
                <textarea name="description" id="description" class="border p-2 rounded w-full" rows="2"></textarea>
            </div>
            
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white p-2 rounded">
                Crear
            </button>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">Carpetas Existentes</h2>
        
        <div class="mt-4">
            <!-- Placeholder para la lista de carpetas -->
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">ID</th>
                        <th class="py-2 px-4 border-b text-left">Nombre</th>
                        <th class="py-2 px-4 border-b text-left">Descripción</th>
                        <th class="py-2 px-4 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán las carpetas dinámicamente -->
                    <tr>
                        <td class="py-2 px-4 border-b text-gray-500" colspan="4">No hay carpetas disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection