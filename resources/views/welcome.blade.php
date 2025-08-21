@extends('template.app')

@section('content')
 <!-- Sección Quiénes somos -->
    <section class=" grid grid-cols-6 gap-4">
        <div class="col-start-2 col-span-4">
            <div class="">
                <div class=" grid grid-cols-6 gap-4 items-center">
                    <!-- Columna texto -->
                    <div class="col-span-3 flex flex-col justify-center">
                        <h2 class="text-5xl font-bold text-green-700 border-l-8 border-green-600 pl-4 ">
                            Nosotros
                        </h2>
                        <p class="text-4xl text-green-700">6 años de experiencia</p>
                    </div>

                        <!-- Columna imagen -->
                    <div class="col-span-3 flex justify-center">
                        <img src="{{ asset('images/logo_single.png') }}" alt="Logo" class="w-auto object-contain">
                    </div>
                </div>
                <h2 class="text-4xl font-bold text-green-700 border-l-8 border-green-600 pl-4 mb-4">¿Quiénes somos?</h2>
                <p class="text-lg leading-relaxed text-gray-700">
                    En <strong>MakePixel</strong> llevamos más de <strong>6 años</strong> siendo aliados estratégicos de la industria en México, ofreciendo soluciones integrales a través de la comercialización de insumos, equipos y productos especializados para entornos industriales.
                </p>
            </div>
            <img src="{{asset('images/logo.png')}}">
        </div>
    </section>
@endsection