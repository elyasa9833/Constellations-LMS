<x-app-layout title="Dashboard">

    <!-- Main Content -->
    <div class="grid grid-rows-16 grid-cols-11 h-full max-w-[1980px] w-full gap-6 overflow-auto pt-2">

        <!-- Content starts here -->

        <!-- Mini Stat -->
        <div class="flex flex-col col-span-9 row-span-2 gap-2 rounded-md shadow-md">
            <!-- Title -->
            <h1 class="text-xl tracking-wide text-white uppercase">Static</h1>
            <!-- Items -->
            <div class="flex items-center gap-6">

                <div class="w-52 hover:scale-110 px-4 py-3 rounded-md bg-gradient-to-tr from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] border border-white/10 flex flex-col"
                    data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                    <div>
                        <div class="flex space-x-2">
                            <i class="text-xl text-white transition ti ti-bolt-filled opacity-80"></i>
                            <span class="text-lg text-white">Course EXP</span>
                        </div>
                        <span class="mt-2 text-3xl text-white">3456</span>
                    </div>
                </div>

                <div class="flex flex-col px-4 py-3 border rounded-md w-52 border-white/10" data-tilt
                    data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
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

        <!-- Carousel -->
        <div class="flex justify-center col-span-2 row-span-3 rounded-md ">
            <x-carousel-news />
        </div>

        <!-- Chart & Calendar -->
        <div class="flex items-center justify-center col-span-9 row-span-5 bg-gray-400 rounded-md shadow-md">
            Stat & Calendar
        </div>

        <!-- Chattago -->
        <div class="col-span-2 row-span-8 md:min-h-[300px] flex items-center justify-center rounded-lg shadow-lg">
            <x-chattago />
        </div>

        <!-- Course -->
        <div class="items-center justify-center col-span-9 row-span-6 bg-gray-400 rounded-md shadow-md"
            x-data="{ open: false }">
            {{-- Recent Course --}}

            {{-- <div class="w-full p-4 text-white rounded-lg shadow-lg"> --}}
                <button class="flex items-center justify-between min-w-full p-4 bg-black/20" @click="open = !open">
                    <span class="font-semibold">Accordion 1</span>
                    <svg x-show="!open" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <svg x-show="open" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                </button>
                <div class="p-4 text-white bg-black/20 backdrop-blur-sm" x-show="open"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2">
                    This is the content for Accordion 1.
                </div>
                {{--
            </div> --}}

        </div>

        <!-- Comunity -->
        <div class="flex items-center justify-center col-span-2 row-span-2 bg-blue-400 rounded-md shadow-md">
            Community
        </div>

        <!-- Ruller -->
        @foreach (range(1, 11) as $number)
            <div class="flex items-center justify-center bg-gray-400 rounded-md shadow-md">{{ $number }}</div>
        @endforeach

        <!-- Content ends here -->

    </div>
    <!-- Main Content -->

</x-app-layout>

<!--Include Modal-->
@include('pages.dashboard.modal')

<!--Include Script-->
@include('pages.dashboard.script')
