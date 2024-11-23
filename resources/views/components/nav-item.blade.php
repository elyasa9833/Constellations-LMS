<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->


<!-- Check if the item is active or inactive -->
@if ($active)
    <!-- Active -->
    <div class="group flex items-center justify-center rounded-lg" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110 opacity-90 bg-gradient-to-tr from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] border border-white/10 md:h-14 md:w-14">
            <i class="ti {{ $icon }} text-2xl text-white transition md:text-3xl"></i>
        </div>
    </div>
    {{-- <div class="rounded-lg bg-gradient-to-r from-[#ffffff50] via-[#cccccc50] to-[#ffffff50] p-[1px]">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-white/10 shadow-xl shadow-gray-900/20 backdrop-blur-md md:h-[3vw] md:w-[3vw]"/>
            <i class="ti {{ $icon }} text-2xl text-white opacity-90 md:text-3xl"></i>
        </div>
    </div> --}}
@else
    <!-- Inactive -->
    <div class="group flex items-center justify-center rounded-lg" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
            <i class="ti {{ $icon }} text-2xl text-white opacity-80 transition group-hover:opacity-100 md:text-3xl"></i>
        </div>
    </div>

    {{-- Paralax --}}
    {{-- <div class="flex items-center justify-center bg-gradient-to-tr from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] border border-white/10 rounded-lg group-hover:scale-110 h-11 w-11" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5" style="transform-style: preserve-3d; transform: perspective(1000px);">
        <div class="flex items-center justify-center text-white" style="transform: translateZ(10px) scale(0.7);">
            <i class="ti ti-picture-in-picture text-2xl text-white opacity-80 transition group-hover:opacity-100 md:text-3xl"></i>
        </div>
    </div> --}}

    {{-- Plain + Transform --}}
    {{-- <div class="group flex items-center justify-center">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-60 group-hover:bg-white/20 hover:border hover:border-white/20 md:h-[3vw] md:w-[3vw]">
            <i class="ti {{ $icon }} text-2xl text-white opacity-80 transition group-hover:opacity-100 md:text-3xl"></i>
        </div>
    </div> --}}

    {{-- Plain --}}
    {{-- <div class="group flex items-center justify-center">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/20 md:h-[3vw] md:w-[3vw]">
            <i class="ti {{ $icon }} text-2xl text-white opacity-60 transition group-hover:opacity-80 md:text-3xl"></i>
        </div>
    </div> --}}
@endif