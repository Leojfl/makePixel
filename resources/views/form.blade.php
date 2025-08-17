@extends('template.app')

@section('content')

    <!-- Sección de contacto -->
    <section class="py-20" id="contacto">
        <div class="max-w-lg mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8 text-green-700 ">Contáctanos</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 px-4 py-2 mb-4 rounded text-center">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-800 px-4 py-2 mb-4 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contacto.enviar') }}" method="POST" class="bg-white p-6 rounded-xl shadow space-y-4 card-shadow">
                @csrf

                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" rows="4"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('mensaje') }}</textarea>
                </div>

                <div>
                    <button type="submit"
                    style="background-color: #006400;"
                            class="button w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                        Enviar mensaje
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection