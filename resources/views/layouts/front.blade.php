<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
         @yield('css')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script language="JavaScript">
            function mueveReloj(){
                momentoActual = new Date()
                hora = momentoActual.getHours()
                minuto = momentoActual.getMinutes()
                segundo = momentoActual.getSeconds()

                str_segundo = new String (segundo)
                if (str_segundo.length == 1)
                   segundo = "0" + segundo

                str_minuto = new String (minuto)
                if (str_minuto.length == 1)
                   minuto = "0" + minuto

                str_hora = new String (hora)
                if (str_hora.length == 1)
                   hora = "0" + hora

                horaImprimible = hora + " : " + minuto + " : " + segundo

                document.form_reloj.reloj.value = horaImprimible

                setTimeout("mueveReloj()",1000)
            }
            </script>
    </head>
    <body class="font-sans antialiased flex flex-col justify-between" onload="mueveReloj()">
        <nav class="bg-gray-800" x-data="{open:false}">
            <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
                <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">

                  <div class="flex items-center flex-shrink-0">
                     <h1 class="text-2xl font-bold text-white">websans</h1>

                  </div>
                  <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                      <a href="{{ route('index') }}" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md" aria-current="page">Home</a>

                      <a href="{{ route('portfolio') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Portfolio</a>

                      <a href="{{ route('galeries') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Galerias</a>

                      <a href="{{ route('blog') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Blog</a>
                    </div>
                  </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <button type="button" class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">


                  </button>

                  <!-- Profile dropdown -->
                  <div class="relative ml-3" x-data="{open:false}"  >
                    <div>
                      <button x-on:click="open=true" type="button" class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="{{ asset('img/SW.png') }}" alt="">
                      </button>
                    </div>


                    <div x-show="open" x-on:click.away="open=false" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <!-- Active: "bg-gray-100", Not Active: "" -->
                      <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">login</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false" >
              <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{ route('index') }}" class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md" aria-current="page">Home</a>

                <a href="{{ route('portfolio') }}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Portfolio</a>

                <a href="{{ route('galeries') }}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Galerias</a>

                <a href="{{ route('blog') }}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Blog</a>
              </div>
            </div>
          </nav>
          <div class="bg-blue-700 flex justify-between items-center p-2">
                   <p class="ml-3 text-white"> {{ date('d-m-Y') }}</p>
                   <form name="form_reloj">
                    <input type="text" name="reloj" class="bg-blue-700 text-white border-none" size="10" onfocus="window.document.form_reloj.reloj.blur()">
                    </form>

          </div>
          @yield('content')
          <footer class="bg-gray-800 flex justify-around items-center p-3 mt-5">
            <div class="flex justify-center">
                <img src="{{ asset('img/SW.png') }}" alt="" class="w-8">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('img/SW.png') }}" alt="" class="w-8">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('img/SW.png') }}" alt="" class="w-8">
            </div>

          </footer>
          @yield('scripts')
    </body>
</html>
