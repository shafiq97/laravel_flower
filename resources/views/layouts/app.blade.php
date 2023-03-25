<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/home.css'])
    @vite('resources/css/footer.css')
    <!-- Scripts -->
    @vite('resources/js/sidebar.js')
    @vite('resources/js/home.js')

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="flex">
            <!-- Sidebar -->
            <div class="w-1/5 bg-gray-700 h-screen text-white">
                <!-- Sidebar header -->
                <div class="flex items-center justify-between px-4 py-3">
                    <h1 class="text-2xl font-bold">Dashboard</h1>
                    <button id="sidebar-toggle" class="text-gray-500 focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <!-- Sidebar content -->
                <div id="sidebar-content" class="px-4 py-2">
                    <!-- add your sidebar content here -->
                    <h4 class="text-2xl font-bold"><a href="">Sidebar</a></h4>
                    <h4 class="text-2xl font-bold"><a href="">Sidebar</a></h4>
                    <h4 class="text-2xl font-bold"><a href="">Sidebar</a></h4>
                    <h4 class="text-2xl font-bold"><a href="">Sidebar</a></h4>
                    <h4 class="text-2xl font-bold"><a href="">Sidebar</a></h4>
                    <h4 class="text-2xl font-bold"><a href="">Sidebar</a></h4>
                </div>
            </div>

            <!-- Main content -->
            <div class="w-4/5">
                <div class="container">
                    <form action="#" method="get" class="flex my-4" style="padding-left: 3vw">
                        <input type="text" name="search" placeholder="Search..."
                            class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                        <button type="submit"
                            class="ml-2 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray active:bg-gray-900">
                            Search
                        </button>
                    </form>
                    @yield('content')
                </div>
            </div>
        </main>

    </div>

    @stack('modals')
    @include('footer')

    @livewireScripts
</body>


</html>
