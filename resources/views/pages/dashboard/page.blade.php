<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Include Tailwind --}}
    @include('scaffold.head')

    {{-- Include Font --}}
    @include('scaffold.font.IBM_Plex_Sans')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="ibm-plex-sans-regular antialiased">
    <div class="fixed flex h-screen w-full">

        <!-- Sidebar Navigations -->
        <div class="bottom-0 top-0 flex max-w-fit flex-col justify-between bg-black px-2 md:px-3">
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
            <div class="group flex items-center justify-center rounded-lg mb-4" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                <button id="openModal" class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
                    <i class="ti ti-user-hexagon text-2xl text-white opacity-80 transition group-hover:opacity-100 md:text-3xl"></i>
                </button>
            </div>
            {{-- <div class="mb-4 flex items-center justify-center">
                <i class="ti ti-user-hexagon text-2xl text-white opacity-90 md:text-3xl"></i>
            </div> --}}

        </div>

        <!-- Main Container -->
        <div class="flex flex-1 flex-col gap-4 overflow-y-auto bg-[#191919] p-6">

            <!-- Header -->
            <x-header title="dashboard" />

            <!-- Main Content -->
            <div class="flex justify-center max-h-[1080px]">
                <div class="grid grid-rows-16 grid-cols-11 h-full max-w-[1980px] w-full gap-6 overflow-auto ">
                    <!-- Content starts here -->

                    <div class="col-span-9 row-span-2 rounded-md shadow-md flex flex-col gap-2">
                        <!-- Title -->
                        <h1 class="text-xl uppercase tracking-wide text-white">Static</h1>
                        <!-- Items -->
                        <div class="items-center flex gap-6">

                            <div class="w-52 hover:scale-110 px-4 py-3 rounded-md bg-gradient-to-tr from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] border border-white/10 flex flex-col" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                                <div>
                                    <div class="flex space-x-2">
                                        <i class="ti ti-bolt-filled text-xl text-white opacity-80 transition"></i>
                                        <span class="text-lg text-white">Course EXP</span>
                                    </div>
                                    <span class="text-3xl text-white mt-2">3456</span>
                                </div>
                            </div>

                            <div class="w-52 px-4 py-3 rounded-md border border-white/10 flex flex-col" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                                <div>
                                    <div class="flex space-x-2">
                                        <i class="ti ti-bolt-filled text-xl text-white opacity-80 transition"></i>
                                        <span class="text-lg text-white">Course EXP</span>
                                    </div>
                                    <span class="text-3xl text-white mt-2">3456</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Carousel --}}
                    <div class="col-span-2 row-span-3 flex justify-center rounded-md ">
                        <x-carousel-news/>
                    </div>

                    <div class="col-span-9 row-span-5 flex items-center justify-center rounded-md bg-gray-400 shadow-md">
                        Stat & Calendar
                    </div>
                    <div class="col-span-2 row-span-8 md:min-h-[300px] flex items-center justify-center rounded-lg shadow-lg">
                        <x-chattago />
                    </div>

                    <div class="col-span-9 row-span-6 flex items-center justify-center rounded-md bg-gray-700 shadow-md">
                        Recent Course
                    </div>
                    <div class="col-span-2 row-span-2 flex items-center justify-center rounded-md bg-blue-400 shadow-md">
                        Community
                    </div>
                    @foreach (range(1, 11) as $number)
                    <div class="flex items-center justify-center rounded-md bg-gray-400 shadow-md">{{ $number }}</div>
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
