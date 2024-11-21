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
            <div class="mb-4 flex items-center justify-center">
                <i class="ti ti-user-hexagon text-2xl text-white opacity-90 md:text-3xl"></i>
            </div>

        </div>

        <!-- Main Content -->

        <div class="flex flex-1 flex-col gap-4 overflow-y-auto bg-[#191919] p-4">

            <!-- Header -->
            <x-header title="dashboard" />

            <!-- Main Content -->
            <div class="grid-rows-16 grid h-full grid-cols-11 gap-4 overflow-y-auto bg-[#191919]">
                {{-- <div class="flex col-span-11 items-center justify-center rounded-md bg-slate-400 shadow-md">Header</div> --}}
                <div class="col-span-9 row-span-2 flex items-center justify-center rounded-md bg-red-400 shadow-md">
                    Static</div>
                {{-- <div class="flex col-span-2 row-span-3 items-center justify-center rounded-md bg-yellow-400 shadow-md">Info</div> --}}
                <div class="col-span-2 row-span-3 flex items-center justify-center rounded-md bg-yellow-400 shadow-md">
                    Info</div>
                <div class="col-span-9 row-span-5 flex items-center justify-center rounded-md bg-gray-400 shadow-md">
                    Stat & Calendar</div>
                {{-- <div class="flex col-span-2 row-span-9 items-center justify-center rounded-md bg-blue-400 shadow-md">Chattago</div> --}}
                <div class="row-span-8 col-span-2 flex items-center justify-center rounded-lg shadow-lg">
                    <x-chattago />
                </div>
                <div class="col-span-9 row-span-6 flex items-center justify-center rounded-md bg-green-400 shadow-md">Recent Course</div>
                <div class="col-span-2 row-span-2 flex items-center justify-center rounded-md bg-blue-400 shadow-md">Comunity</div>
                @foreach (range(1, 11) as $number)
                    <div class="flex items-center justify-center rounded-md bg-gray-400 shadow-md">{{ $number }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>
