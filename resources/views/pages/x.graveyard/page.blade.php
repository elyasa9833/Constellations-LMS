<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Include Tailwind --}}
    @include('scaffold.head')

    {{-- Include Font --}}
    @include('scaffold.font.IBM_Plex_Sans')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased ibm-plex-sans-regular">
    <div class="fixed flex w-full h-screen">

        <!-- Sidebar Navigations -->
        <div class="top-0 bottom-0 flex flex-col justify-between px-2 bg-black max-w-fit md:px-3">
            {{-- Menu items Top --}}
            <div class="flex flex-col items-center gap-4">
                {{-- Logo --}}
                <img class="mt-4 h-11 w-11" src="{{ asset('assets/icons/Icon Dark.svg') }}" alt="Logo">

                <x-nav-item icon="ti-school" active="y" />
                @foreach (['ti-bolt', 'ti-code', 'ti-cube-spark', 'ti-puzzle'] as $icon)
                    <x-nav-item icon="{{ $icon }}" active="" />
                @endforeach

            </div>

            {{-- Menu item Bottom --}}
            <div class="flex items-center justify-center mb-4 rounded-lg group" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                <button id="openModal" class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
                    <i class="text-2xl text-white transition ti ti-user-hexagon opacity-80 group-hover:opacity-100 md:text-3xl"></i>
                </button>
            </div>
            {{-- <div class="flex items-center justify-center mb-4">
                <i class="text-2xl text-white ti ti-user-hexagon opacity-90 md:text-3xl"></i>
            </div> --}}

        </div>

        <!-- Main Container -->
        <div class="flex flex-1 flex-col gap-4 overflow-y-auto bg-[#191919] p-6">

            <!-- Alert sementara -->
            @if (session('error'))
                <script>alert("{{ session('error') }}");</script>
            @endif

            <!-- Header -->
            <x-header title="dashboard" />

            <!-- Main Content -->
            <div class="flex justify-center max-h-[1080px]">
                <div class="grid grid-rows-16 grid-cols-11 h-full max-w-[1980px] w-full gap-6 overflow-auto ">
                    <!-- Content starts here -->

                    <div class="flex flex-col col-span-9 row-span-2 gap-2 rounded-md shadow-md">
                        <!-- Title -->
                        <h1 class="text-xl tracking-wide text-white uppercase">Static</h1>
                        <!-- Items -->
                        <div class="flex items-center gap-6">

                            <div class="w-52 hover:scale-110 px-4 py-3 rounded-md bg-gradient-to-tr from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] border border-white/10 flex flex-col" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                                <div>
                                    <div class="flex space-x-2">
                                        <i class="text-xl text-white transition ti ti-bolt-filled opacity-80"></i>
                                        <span class="text-lg text-white">Course EXP</span>
                                    </div>
                                    <span class="mt-2 text-3xl text-white">3456</span>
                                </div>
                            </div>

                            <div class="flex flex-col px-4 py-3 border rounded-md w-52 border-white/10" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                                <div>
                                    <div class="flex space-x-2">
                                        <i class="text-xl text-white transition ti ti-bolt-filled opacity-80"></i>
                                        <span class="text-lg text-white">Course EXP</span>
                                    </div>
                                    <span class="mt-2 text-3xl text-white">3456</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Carousel --}}
                    <div class="flex justify-center col-span-2 row-span-3 rounded-md ">
                        <x-carousel-news/>
                    </div>

                    <div class="flex items-center justify-center col-span-9 row-span-5 bg-gray-400 rounded-md shadow-md">
                        Stat & Calendar
                    </div>
                    <div class="col-span-2 row-span-8 md:min-h-[300px] flex items-center justify-center rounded-lg shadow-lg">
                        <x-chattago />
                    </div>

                    <div class="items-center justify-center col-span-9 row-span-6 bg-gray-400 rounded-md shadow-md" x-data="{ open: false }">
                        {{-- Recent Course --}}

                        {{-- <div class="w-full p-4 text-white rounded-lg shadow-lg" > --}}
                            <button class="flex items-center justify-between min-w-full p-4 bg-black/20" @click="open = !open">
                                <span class="font-semibold">Accordion 1</span>
                                <svg x-show="!open" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                <svg x-show="open" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            <div  class="p-4 text-white bg-black/20 backdrop-blur-sm" x-show="open" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2">
                                This is the content for Accordion 1.
                            </div>
                        {{-- </div> --}}

                    </div>
                    <div class="flex items-center justify-center col-span-2 row-span-2 bg-blue-400 rounded-md shadow-md">
                        Community
                    </div>
                    @foreach (range(1, 11) as $number)
                    <div class="flex items-center justify-center bg-gray-400 rounded-md shadow-md">{{ $number }}</div>
                    @endforeach
                    <!-- Content ends here -->
                </div>
            </div>

        </div>
    </div>

    <!-- Include Tilt Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/vanilla-tilt.js')}}"></script>

    <!-- Modals -->
    @include('pages.dashboard.modals')

    <!-- Jquery -->
    <script type="module">
        $(document).ready(function () {
            $('#openModal').click(function () {
                $('#modal').removeClass('hidden').addClass('flex');
            });

            $('#closeModal').click(function () {
                $('#modal').removeClass('flex').addClass('hidden');
            });

            // Tutup modal jika klik di luar area modal
            $('#modal').click(function (e) {
                if ($(e.target).is('#modal')) {
                $('#modal').removeClass('flex').addClass('hidden');
                }
            });
        });
    </script>

</body>
</html>
