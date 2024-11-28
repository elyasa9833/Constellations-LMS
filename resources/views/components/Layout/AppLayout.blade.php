<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Constellations - {{$title}}</title>

    <!-- Include Head -->
    @include('scaffold.head')

    <!-- Include Font -->
    @include('scaffold.font.IBM_Plex_Sans')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased ibm-plex-sans-regular">
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <!-- Scafold -->
    <div class="fixed flex w-full h-screen">

        <!-- Side Nav -->
        <div class="top-0 bottom-0 flex flex-col justify-between px-2 bg-black max-w-fit md:px-3">
            <!-- Menu items Top -->
            <div class="flex flex-col items-center gap-4">
                <!-- Logo -->
                <img class="mt-4 h-11 w-11" src="{{ asset('assets/icons/Icon Dark.svg') }}" alt="Logo">
                <!-- Logo -->
                <!-- Nav Item -->
                <x-nav-item icon="ti-school" active="1" />
                @foreach (['ti-bolt', 'ti-code', 'ti-cube-spark', 'ti-puzzle'] as $icon)
                <x-nav-item icon="{{ $icon }}" active="" />
                @endforeach
                <!-- Nav Item -->
            </div>
            <!-- Menu items Top -->

            <!-- Menu item Bottom -->
            <div class="flex items-center justify-center mb-4 rounded-lg group" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                <button id="openModal" class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
                    <i class="text-2xl text-white transition ti ti-user-hexagon opacity-80 group-hover:opacity-100 md:text-3xl"></i>
                </button>
            </div>
            <!-- Menu item Bottom -->

        </div>
        <!-- Side Nav -->

        <!-- Main Container -->
        <div class="flex flex-1 flex-col gap-4 overflow-y-auto bg-[#191919] text-white p-6">

            <!-- Header -->
            <x-header title="{{$title}}" />
            <!-- Header -->

            <!-- Main Content -->
                <div class="flex justify-center max-h-[1080px]">
                    <!-- Page Content -->
                    {{ $slot }}
                    <!-- Page Content -->
                </div>
        </div>
        <!-- Main Container -->

    </div>

    <!-- Tilt Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/vanilla-tilt.js')}}"></script>

    <!--Include Login Modal-->
    @include('scaffold.modal.login')
</body>
</html>