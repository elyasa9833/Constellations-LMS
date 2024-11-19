<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Include Tailwind --}}
    @include('scaffold.head')

    {{-- Include Font --}}
    @include('scaffold.font.IBM_Plex_Sans')

</head>

<body class="ibm-plex-sans-regular antialiased">
    <div class="fixed flex h-screen w-full">
        <!-- Sidebar Menu -->
        <div class="bottom-0 top-0 flex max-w-fit flex-col justify-between bg-black px-2 md:px-3">
            {{-- Logo --}}
            {{-- <img class="mt-4 h-11 w-11 md:h-14 md:w-14" src="{{ asset('assets/icons/Icon Dark.png') }}" alt="Logo"> --}}
            {{-- <img class="mt-4 h-11 w-11 md:h-14 md:w-14" src="{{ asset('assets/icons/Icon Light.png') }}" alt="Logo"> --}}

            {{-- Menu items Top --}}
            <div class="flex flex-col items-center gap-4">
                <img class="mt-4  md:h-[3vw] md:w-[3vw]" src="{{ asset('assets/icons/Icon Dark.png') }}" alt="Logo">

                @foreach (['ti-school', 'ti-bolt', 'ti-code', 'ti-cube-spark', 'ti-puzzle'] as $icon)
                    <x-nav-item icon="{{ $icon }}" active="" />
                @endforeach

                {{-- <div class="group flex items-center justify-center">
                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/20 md:h-14 md:w-14">
                        <i
                            class="ti ti-cube-spark text-2xl text-white opacity-60 transition group-hover:opacity-80 md:text-3xl"></i>
                    </div>
                </div> --}}

            </div>

            {{-- Menu item Bottom --}}
            <div class="mb-4 flex items-center justify-center">
                <i class="ti ti-user-hexagon text-2xl text-white opacity-90 md:text-3xl"></i>
            </div>

        </div>

        <!-- Main Content -->
        <div class="grid flex-1 grid-cols-10 gap-4 bg-[#191919] p-4 overflow-y-auto">
            <!-- Loop grid item for testing grid-->
            <div class="flex col-span-10 h-24 items-center justify-center rounded-md bg-slate-400 shadow-md">1</div>
            <div class="flex col-span-7 h-24 items-center justify-center rounded-md bg-red-400 shadow-md">2</div>
            <div class="flex col-span-3 h-24 items-center justify-center rounded-md bg-yellow-400 shadow-md">3</div>
            <div class="flex col-span-7 h-24 items-center justify-center rounded-md bg-green-400 shadow-md">2</div>
            <div class="flex col-span-3 h-24 items-center justify-center rounded-md bg-blue-400 shadow-md">3</div>
            @foreach (range(1, 20) as $number)
                <!-- Grid Items -->
            {{-- <div class="flex h-24 items-center justify-center rounded-md bg-slate-400 shadow-md">1</div> --}}
            <div class="flex h-24 items-center justify-center rounded-md bg-red-400 shadow-md">2</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-yellow-400 shadow-md">3</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-green-400 shadow-md">4</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-blue-400 shadow-md">5</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-purple-400 shadow-md">6</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-pink-400 shadow-md">7</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-indigo-400 shadow-md">8</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-gray-400 shadow-md">9</div>
            <div class="flex h-24 items-center justify-center rounded-md bg-teal-400 shadow-md">10</div>
            @endforeach
        </div>
    </div>
</body>

</html>
