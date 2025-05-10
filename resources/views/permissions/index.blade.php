@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Gestión de Permisos</h1>
        <a href="/dashboard" class="bg-gray-500 hover:bg-gray-600 text-white p-2 rounded">
            Volver al Panel
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Asignar Nuevo Permiso</h2>
        
        <form action="/permissions" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-2">Nombre del Permiso</label>
                <input type="text" name="name" id="name" class="border p-2 rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 mb-2">Descripción (opcional)</label>
                <textarea name="description" id="description" class="border p-2 rounded w-full" rows="2"></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Tipo de Recurso</label>
                <div class="flex gap-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="resource_type" value="folder" class="mr-2">
                        Carpeta
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="resource_type" value="file" class="mr-2">
                        Archivo
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="resource_type" value="page" class="mr-2">
                        Página
                    </label>
                </div>
            </div>
            
            <div class="mb-4">
                <label for="resource_id" class="block text-gray-700 mb-2">ID del Recurso</label>
                <input type="number" name="resource_id" id="resource_id" class="border p-2 rounded w-full">
            </div>
            
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white p-2 rounded">
                Asignar
            </button>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">Permisos Existentes</h2>
        
        <div class="mt-4">
            <!-- Placeholder para la lista de permisos -->
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">ID</th>
                        <th class="py-2 px-4 border-b text-left">Nombre</th>
                        <th class="py-2 px-4 border-b text-left">Tipo de Recurso</th>
                        <th class="py-2 px-4 border-b text-left">ID de Recurso</th>
                        <th class="py-2 px-4 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán los permisos dinámicamente -->
                    <tr>
                        <td class="py-2 px-4 border-b text-gray-500" colspan="5">No hay permisos disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection