@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Información Pública - Ministerio de Educación</h1>
    
    <!-- Banner principal -->
    <div class="bg-blue-600 h-48 flex items-center justify-center mb-8 rounded-lg shadow-md overflow-hidden relative">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-blue-500 opacity-90"></div>
        <div class="relative z-10 text-center">
            <img src="{{ asset('assets/images/logo-mineduc.png') }}" alt="Logo Ministerio de Educación" 
                class="h-20 mx-auto mb-2 hidden">
            <h2 class="text-white text-2xl font-bold">Ministerio de Educación de Guatemala</h2>
            <p class="text-white text-lg">Portal de Información Pública</p>
        </div>
    </div>
    
    <!-- Sección de información -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <p class="text-gray-700 mb-6 text-lg">
            Bienvenidos al portal de información pública del Ministerio de Educación de Guatemala. 
            Aquí encontrarás recursos y documentos oficiales conforme a la Ley de Acceso a la Información Pública.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                <h3 class="font-bold text-blue-700 mb-2">Información Institucional</h3>
                <p class="text-gray-600">Estructura orgánica, funciones, marco normativo y planificación estratégica.</p>
            </div>
            
            <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                <h3 class="font-bold text-blue-700 mb-2">Presupuesto</h3>
                <p class="text-gray-600">Información presupuestaria, ejecución y contrataciones públicas.</p>
            </div>
            
            <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                <h3 class="font-bold text-blue-700 mb-2">Programas Educativos</h3>
                <p class="text-gray-600">Información sobre programas, proyectos y servicios educativos.</p>
            </div>
        </div>
        
        <p class="text-gray-700 mb-6">
            El Ministerio de Educación de Guatemala está comprometido con la transparencia y el acceso a la información pública,
            facilitando a la ciudadanía el conocimiento sobre la gestión educativa del país.
        </p>
    </div>
    
    <!-- Sección de acceso al sistema -->
    <div class="bg-gray-50 rounded-lg shadow-md p-6 text-center">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Acceso al Sistema Interno</h2>
        <p class="text-gray-600 mb-6">Si eres funcionario del Ministerio de Educación, accede al sistema interno para gestionar documentos y recursos.</p>
        <a href="/dashboard" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 inline-block font-medium transition-colors">
            Acceder al Sistema
        </a>
    </div>
    
    <!-- Footer -->
    <footer class="mt-12 text-center text-gray-500 text-sm">
        <p>© {{ date('Y') }} Ministerio de Educación de Guatemala. Todos los derechos reservados.</p>
        <p class="mt-2">6ª calle 1-87, zona 10, Guatemala, Guatemala</p>
    </footer>
</div>
@endsection