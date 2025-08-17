<header class="bg-green-900 text-white px-10 py-16 card-shadow">
  <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
    
    <!-- Columna izquierda -->
    <div class="flex flex-col  items-center justify-center md:justify-start space-x-4 text-center md:text-left">
      <a href="{{route('home')}}">
      <img src="{{ asset('images/logo_single.png') }}" alt="Logo" class="w-auto h-60 object-contain">
      <h1 class="text-center text-5xl font-bold leading-tight ">
        Make Pixel
      </h1>
    </a>
    </div>

    <!-- Columna derecha -->
    <div class="flex flex-col items-center  justify-center text-center md:text-right">
      <div class="">
        
      <span class="text-4xl font-semibold">Suministros industriales</span> <br/>
      <span class="text-3xl font-semibold">para todos los sectores</span> <br/>

      <a href="{{route('contacto.form')}}"
         class="inline-block mt-6 px-6 py-3 border border-white rounded-xl text-white font-medium hover:bg-white hover:text-green-900 transition">
        Contáctanos
      </a>
      </div>
    </div>

  </div>
</header>
