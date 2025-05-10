@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Gestión de Archivos</h1>
        <a href="/dashboard" class="bg-gray-500 hover:bg-gray-600 text-white p-2 rounded">
            Volver al Panel
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Subir Nuevo Archivo</h2>
        
        <form action="/files" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="file" class="block text-gray-700 mb-2">Seleccionar Archivo</label>
                <input type="file" name="file" id="file" class="border p-2 rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="folder_id" class="block text-gray-700 mb-2">Carpeta (opcional)</label>
                <select name="folder_id" id="folder_id" class="border p-2 rounded w-full">
                    <option value="">-- Seleccionar Carpeta --</option>
                    <!-- Aquí se cargarían las carpetas dinámicamente -->
                </select>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 mb-2">Descripción (opcional)</label>
                <textarea name="description" id="description" class="border p-2 rounded w-full" rows="2"></textarea>
            </div>
            
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white p-2 rounded">
                Subir
            </button>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">Archivos Existentes</h2>
        
        <div class="mt-4">
            <!-- Placeholder para la lista de archivos -->
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">ID</th>
                        <th class="py-2 px-4 border-b text-left">Nombre</th>
                        <th class="py-2 px-4 border-b text-left">Carpeta</th>
                        <th class="py-2 px-4 border-b text-left">Tamaño</th>
                        <th class="py-2 px-4 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán los archivos dinámicamente -->
                    <tr>
                        <td class="py-2 px-4 border-b text-gray-500" colspan="5">No hay archivos disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection