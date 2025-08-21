<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MakePixel - Contacto y Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

@if (session('success') || $errors->any())
<script>
    window.addEventListener('load', function () {
        const target = document.getElementById('contacto');
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
@endif
    <!-- Header -->
<header class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
    <div class="flex items-center">
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-12 mr-3">
        <h1 class="text-2xl font-bold text-green-700">MakePixel</h1>
    </div>
    <nav>
        <a href="#about" class="px-4 py-2 text-green-700 hover:text-green-900">Nosotros</a>
        <a href="#products" class="px-4 py-2 text-green-700 hover:text-green-900">Productos</a>
        <a href="#contact" class="px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">Contáctanos</a>
    </nav>
</header>


    <!-- Sección Quiénes somos -->
    <section class="py-20 bg-gradient-to-br from-gray-100 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-12">
                <h2 class="text-4xl font-bold text-blue-700 border-l-8 border-blue-600 pl-4 mb-4">¿Quiénes somos?</h2>
                <p class="text-lg leading-relaxed text-gray-700">
                    En <strong>MakePixel</strong> llevamos más de <strong>6 años</strong> siendo aliados estratégicos de la industria en México, ofreciendo soluciones integrales a través de la comercialización de insumos, equipos y productos especializados para entornos industriales.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-blue-500">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">🛠 ¿Qué ofrecemos?</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Contenedores y barriles industriales</li>
                        <li>Señalización de seguridad y advertencia</li>
                        <li>Uniformes industriales y equipo de protección personal (EPP)</li>
                        <li>Herramientas, accesorios y suministros generales para planta</li>
                        <li>Material de empaque, limpieza y mantenimiento</li>
                        <li>Artículos personalizados según necesidad del cliente</li>
                    </ul>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-blue-500">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">🤝 Compromiso con la industria</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Trabajamos de la mano con fabricantes y marcas reconocidas para ofrecer productos <strong>duraderos, certificados y con disponibilidad inmediata</strong>, entendiendo las demandas y retos del sector industrial.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6 text-sm">
                <div class="bg-blue-50 p-6 rounded-xl shadow border-l-4 border-blue-400">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">💡 Nuestra misión</h3>
                    <p class="text-gray-700">Brindar soluciones confiables y eficientes en suministros industriales que contribuyan al desarrollo seguro y continuo de nuestros clientes, garantizando calidad, compromiso y atención personalizada.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-xl shadow border-l-4 border-blue-400">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">👁 Nuestra visión</h3>
                    <p class="text-gray-700">Ser una empresa líder a nivel nacional en el suministro industrial, reconocida por nuestra eficiencia operativa, calidad en productos y excelencia en el servicio al cliente.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-xl shadow border-l-4 border-blue-400">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">⚙️ Nuestros valores</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li><strong>Compromiso:</strong> Antes, durante y después de cada compra.</li>
                        <li><strong>Responsabilidad:</strong> Soluciones con altos estándares.</li>
                        <li><strong>Confianza:</strong> Más de una década nos respalda.</li>
                        <li><strong>Adaptabilidad:</strong> Nos ajustamos a cada cliente.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section class="py-20 bg-gray-100" id="contacto">
        <div class="max-w-lg mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Contáctanos</h2>

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

            <form action="{{ route('contacto.enviar') }}" method="POST" class="bg-white p-6 rounded-xl shadow space-y-4">
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
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                        Enviar mensaje
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-6 text-sm text-gray-500">
        &copy; {{ date('Y') }} MakePixel. Todos los derechos reservados.
    </footer>

</body>
</html>
