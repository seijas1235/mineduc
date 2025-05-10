@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Panel Principal</h1>
    
    <div class="mb-6">
        <p class="text-gray-600 mb-4">Prueba sin login habilitado</p>
        
        <div class="flex flex-wrap gap-2">
            <a href="/folders" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded">
                Gestionar Carpetas
            </a>
            <a href="/files" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded">
                Gestionar Archivos
            </a>
            <a href="/pages" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded">
                Gestionar Páginas
            </a>
            <a href="/permissions" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded">
                Gestionar Permisos
            </a>
        </div>
    </div>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-3">Información del Sistema</h2>
        <p class="text-gray-600">
            Este sistema permite gestionar carpetas, archivos, páginas y permisos.
            Utiliza la barra de navegación superior para acceder a las diferentes secciones.
        </p>
    </div>
@endsection