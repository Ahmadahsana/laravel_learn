<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <link rel="stylesheet" href="{{ url('/landing/public/css/style.css') }}">

    <style>
      .serviceImageheight {
          height: 220px;
      }

      /*
* View a PURE 100% Tailwind CSS version here:
* https://play.tailwindcss.com/Vg6H4j8Fux
*/

      .glow {
          top: -10%;
          left: -10%;
          width: 120%;
          height: 120%;
          border-radius: 100%;
      }

      .glow-1 {
          animation: glow1 4s linear infinite;
      }

      .glow-2 {
          animation: glow2 4s linear infinite;
          animation-delay: 100ms;
      }

      .glow-3 {
          animation: glow3 4s linear infinite;
          animation-delay: 200ms;
      }

      .glow-4 {
          animation: glow4 4s linear infinite;
          animation-delay: 300ms;
      }

      @keyframes glow1 {
          0% {
              transform: translate(10%, 10%) scale(1);
          }

          25% {
              transform: translate(-10%, 10%) scale(1);
          }

          50% {
              transform: translate(-10%, -10%) scale(1);
          }

          75% {
              transform: translate(10%, -10%) scale(1);
          }

          100% {
              transform: translate(10%, 10%) scale(1);
          }
      }

      @keyframes glow2 {
          0% {
              transform: translate(-10%, -10%) scale(1);
          }

          25% {
              transform: translate(10%, -10%) scale(1);
          }

          50% {
              transform: translate(10%, 10%) scale(1);
          }

          75% {
              transform: translate(-10%, 10%) scale(1);
          }

          100% {
              transform: translate(-10%, -10%) scale(1);
          }
      }

      @keyframes glow3 {
          0% {
              transform: translate(-10%, 10%) scale(1);
          }

          25% {
              transform: translate(-10%, -10%) scale(1);
          }

          50% {
              transform: translate(10%, -10%) scale(1);
          }

          75% {
              transform: translate(10%, 10%) scale(1);
          }

          100% {
              transform: translate(-10%, 10%) scale(1);
          }
      }

      @keyframes glow4 {
          0% {
              transform: translate(10%, -10%) scale(1);
          }

          25% {
              transform: translate(10%, 10%) scale(1);
          }

          50% {
              transform: translate(-10%, 10%) scale(1);
          }

          75% {
              transform: translate(-10%, -10%) scale(1);
          }

          100% {
              transform: translate(10%, -10%) scale(1);
          }
      }
  </style>
    
</head>

<body class="bg-gray-800">
  
  <nav class="bg-gray-800 shadow-lg shadow-violet-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
          Icon when menu is closed.

          Heroicon name: outline/menu

          Menu open: "hidden", Menu closed: "block"
        -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
          Icon when menu is open.

          Heroicon name: outline/x

          Menu open: "block", Menu closed: "hidden"
        -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto" src="{{ url('landing/public/img/pura logo.svg') }}" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto" src="{{ url('landing/public/img/pura it service1.svg') }}" alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="{{ ($title == 'home') ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium' }}"
                            aria-current="page">Home</a>
                        {{-- <a href="/about"
                            class="{{ ($title == 'about') ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium' }}">About</a> --}}

                        <a href="/posts"
                            class="{{ ($title == 'posts') ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium' }}">Post</a>

                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button"
                    class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    <div>
                        <button type="button"
                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">Home</a>

            <a href="/about"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>

            <a href="/post"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Post</a>

            
        </div>
    </div>
  </nav>

    {{-- <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title == 'home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == 'about') ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == 'post') ? 'active' : '' }}" href="/posts">Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == 'landing') ? 'active' : '' }}" href="/landing">Landing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
        </div>
        </div>
    </nav> --}}

    <div class="container mt-4">
        @yield('container')
    </div>
    

    
</body>

</html>