<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Include Tailwind --}}
    @include('scaffold.head')

    {{-- Include Font --}}
    @include('scaffold.font.IBM_Plex_Sans')

</head>

<body class="ibm-plex-sans-regular antialiased">
    <div class="fixed bottom-0 top-0 flex max-w-fit flex-col justify-between bg-black px-2 md:px-3">
        {{-- Logo --}}
        {{-- <img class="mt-4 h-11 w-11 md:h-14 md:w-14" src="{{ asset('assets/icons/Icon Dark.png') }}" alt="Logo"> --}}
        {{-- <img class="mt-4 h-11 w-11 md:h-14 md:w-14" src="{{ asset('assets/icons/Icon Light.png') }}" alt="Logo"> --}}

        {{-- Menu items Top --}}
        <div class="flex flex-col items-center gap-4">
            <img class="mt-4 h-11 w-11 md:h-14 md:w-14" src="{{ asset('assets/icons/Icon Dark.png') }}" alt="Logo">

            {{-- Menu items --}}
            {{-- <div class="rounded-lg bg-gradient-to-r from-[#ffffff50] via-[#cccccc50] to-[#ffffff50] p-[1px]">
                <div
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-white/10 shadow-xl shadow-gray-900/20 backdrop-blur-md md:h-14 md:w-14">
                    <i class="ti ti-layout-dashboard text-2xl text-white opacity-90 md:text-3xl"></i>
                </div>
            </div> --}}
            {{-- array --}}
            {{-- [ti-school, ti-bolt, ti-code, ti-cube-spark, ti-puzzle] --}}

            @foreach (['ti-school', 'ti-bolt', 'ti-code', 'ti-cube-spark', 'ti-puzzle'] as $icon)
                <x-nav-item icon="{{ $icon }}" active="" />
            @endforeach

            <div class="group flex items-center justify-center">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/20 md:h-14 md:w-14">
                    <i class="ti ti-cube-spark text-2xl text-white opacity-60 transition group-hover:opacity-80 md:text-3xl"></i>
                </div>
            </div>

        </div>

        {{-- Menu item Bottom --}}
        <div class="mb-4 flex items-center justify-center">
            <i class="ti ti-user-hexagon text-2xl text-white opacity-90 md:text-3xl"></i>
        </div>


        {{-- <div class="fixed bottom-0 top-0 flex max-w-fit flex-col gap-4 overflow-y-auto bg-black px-2 md:px-3">
        <!-- Menu items Top-->
        <div class="flex-col gap-10">
            <!-- Logo -->
            <img class="mt-4 h-11 w-11 md:h-14 md:w-14" src="{{ asset('assets/icons/Icon Dark.png') }}" alt="">

            <!-- Menu items -->
            <div class="rounded-lg bg-gradient-to-r from-[#ffffff50] via-[#cccccc50] to-[#ffffff50] p-[1px]">
                <div
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-white/10 shadow-xl shadow-gray-900/20 backdrop-blur-md md:h-14 md:w-14">
                    <i class="ti ti-layout-dashboard text-2xl text-white opacity-90 md:text-3xl"></i>
                </div>
            </div>
        </div>

        <!-- Menu item Bottom -->
        <div>
            <i class="ti ti-user-hexagon text-2xl text-white opacity-90 md:text-3xl"></i>
        </div> --}}

        <!-- Container for menu item with gradient border -->
        {{-- <div class="rounded-md p-px bg-gradient-to-r from-[#FFFFFF3D]/[24%] to-[#9999993D]/[24%]">
            <!-- Inner container for menu item with background and padding -->
            <div class="bg-[#fff]/[10%] px-4 py-3 rounded-md flex items-center justify-center">
                <i class="ti ti-alert-hexagon-filled md:text-2xl text-xl"></i>
            </div>
        </div> --}}

    </div>
</body>

</html>
