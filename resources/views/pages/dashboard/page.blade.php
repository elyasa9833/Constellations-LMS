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
                <button class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
                    <i class="ti ti-user-hexagon text-2xl text-white opacity-80 transition group-hover:opacity-100 md:text-3xl"></i>
                </button>
            </div>
            {{-- <div class="mb-4 flex items-center justify-center">
                <i class="ti ti-user-hexagon text-2xl text-white opacity-90 md:text-3xl"></i>
            </div> --}}

        </div>

        <!-- Main Content -->
        <div class="flex flex-1 flex-col gap-4 overflow-y-auto bg-[#191919] p-6">

            <!-- Header -->
            <x-header title="dashboard" />

            <!-- Main Content -->
            {{-- <div class="grid-rows-16 grid h-full max-w-[1980px] w-100 grid-cols-11 gap-4 overflow-y-auto bg-[#191919]">
                <div class="col-span-9 row-span-2 flex items-center justify-center rounded-md bg-red-400 shadow-md">
                    Static</div>
                <div class="col-span-2 row-span-3 flex items-center justify-center rounded-md bg-yellow-400 shadow-md">
                    Info</div>
                <div class="col-span-9 row-span-5 flex items-center justify-center rounded-md bg-gray-400 shadow-md">
                    Stat & Calendar</div>
                <div class="row-span-8 col-span-2 flex items-center justify-center rounded-lg shadow-lg">
                    <x-chattago />
                </div>
                <div class="col-span-9 row-span-6 flex items-center justify-center rounded-md bg-green-400 shadow-md">Recent Course</div>
                <div class="col-span-2 row-span-2 flex items-center justify-center rounded-md bg-blue-400 shadow-md">Comunity</div>
                @foreach (range(1, 11) as $number)
                    <div class="flex items-center justify-center rounded-md bg-gray-400 shadow-md">{{ $number }}
                    </div>
                @endforeach
            </div> --}}
            <div class="flex justify-center max-h-[1080px]">
                <div class="grid grid-rows-16 grid-cols-11 h-full max-w-[1980px] w-full gap-6 overflow-auto ">
                    <!-- Content starts here -->
                    {{-- <div class="flex col-span-11 items-center justify-center rounded-md bg-slate-400 shadow-md">Header</div> --}}

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
                        {{-- <div class="items-center flex gap-6">
                            <div data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5" style="transform-style: preserve-3d; transform: perspective(1000px); class="w-52 px-4 py-3 rounded-md bg-gradient-to-tr from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] border border-white/10 flex flex-col">
                                <div style="transform: translateZ(30px) scale(0.7);">
                                    <div class="flex space-x-2">
                                        <i class="ti ti-bolt-filled text-xl text-white opacity-80 transition"></i>
                                        <span class="text-lg text-white">Course EXP</span>
                                    </div>
                                    <span class="text-3xl text-white mt-2">3456</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    {{-- <div class="flex col-span-2 row-span-3 items-center justify-center rounded-md bg-yellow-400 shadow-md">Info</div> --}}
                    {{-- <div class="col-span-2 row-span-3 flex items-center justify-center rounded-md border border-white/10 shadow-md">
                        <div class="flex transition-transform duration-500 ease-in-out">
                            <div class="w-52 px-4 py-3 rounded-md border border-white/10 flex flex-col" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                                <div>
                                    <div class="flex space-x-2">
                                        <i class="ti ti-bolt-filled text-xl text-white opacity-80 transition"></i>
                                        <span class="text-lg text-white">Course EXP</span>
                                    </div>
                                    <span class="text-3xl text-white mt-2">3456</span>
                                </div>
                            </div>
                            <div class="w-full flex-shrink-0 h-40 flex items-center justify-center">
                                <img src="{{ asset('assets/icons/Icon Dark.png') }}" alt="Carousel Image" class="max-w-full max-h-full object-contain rounded-md">
                            </div>
                        </div>
                    </div> --}}

                    {{-- Carousel --}}
                    <div class="col-span-2 row-span-3 flex justify-center rounded-md ">
                        <x-carousel-news/>
                        {{-- <div x-data="{activeSlide: 0, slides: {{json_encode($carouselItems)}}, interval: null }" x-init="interval = setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 3000)" class="relative w-fit h-fit overflow-hidden rounded-md">

                            <!-- Slides Container -->
                            <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${activeSlide * 100}%)`">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <div class="w-full flex-shrink-0 h-fit flex items-center justify-center">
                                        <div class="w-full rounded-md border border-white/10 relative overflow-hidden flex flex-col"
                                            data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                                            <!-- Gambar -->
                                            <img :src="slide" alt="Carousel Image" class="object-cover w-full h-64 rounded-md">

                                            <!-- Overlay untuk teks -->
                                            <div class="w-full bg-gradient-to-t from-black to-transparent absolute bottom-0 px-4 py-2">
                                                <!-- Judul -->
                                                <h1 class="text-lg font-semibold uppercase tracking-wide text-white line-clamp-2">
                                                    Judul Berita yang Sangat Panjang
                                                </h1>
                                                <!-- Penyelenggara -->
                                                <p class="text-sm text-gray-300">
                                                    Diselenggarakan oleh: <span class="font-medium">Nama Penyelenggara</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </template>
                            </div>

                            <!-- Navigation Dots -->
                            <div class="absolute bottom-2 left-0 right-0 flex justify-center space-x-2">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <button @click="activeSlide = index" :class="{'bg-white': activeSlide === index, 'bg-gray-400': activeSlide !== index}" class="w-3 h-3 rounded-full transition-colors duration-200"></button>
                                </template>
                            </div>

                            <!-- Navigation Buttons -->
                            <button @click="activeSlide = (activeSlide > 0) ? activeSlide - 1 : slides.length - 1"
                                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-30 text-white p-2 rounded-full hover:bg-opacity-50">
                                &#9664;
                            </button>
                            <button @click="activeSlide = (activeSlide < slides.length - 1) ? activeSlide + 1 : 0"
                                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-30 text-white p-2 rounded-full hover:bg-opacity-50">
                                &#9654;
                            </button>

                        </div> --}}
                    </div>

                    <div class="col-span-9 row-span-5 flex items-center justify-center rounded-md bg-gray-400 shadow-md">
                        Stat & Calendar
                    </div>
                    {{-- <div class="col-span-2 row-span-8 min-h-[75%] flex items-center justify-center rounded-lg shadow-lg">
                        <x-chattago />
                    </div> --}}
                    <div class="col-span-2 row-span-8 md:min-h-[300px] flex items-center justify-center rounded-lg shadow-lg">
                        <x-chattago />
                    </div>

                    <div class="col-span-9 row-span-6 flex items-center justify-center rounded-md bg-gray-700 shadow-md">
                        {{-- Recent Course --}}
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

    {{-- Include Scripts --}}
    <script type="text/javascript" src="{{asset('assets/js/vanilla-tilt.js')}}"></script>
</body>
</html>
