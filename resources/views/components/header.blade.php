<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<div class="flex items-center justify-between">
    <h1 class="text-4xl tracking-wide text-white uppercase">{{$title}}</h1>
    <div class="flex gap-5 pr-2">
        <!-- Search button with search icon-->
        <button class="flex w-3/4 items-center rounded-md border border-white/20 from-[#79797950] via-[#b4b4b450] to-[#79797950] px-3 transition hover:scale-105 hover:bg-gradient-to-tr">
            <span class="mr-[5vw] text-white opacity-80 hover:opacity-100">Search</span>
            <i class="text-2xl text-white transition ti ti-search opacity-80 hover:animate-search-icon hover:opacity-100 md:text-xl"></i>
        </button>
        {{-- <i class="text-2xl text-white transition ti ti-bell opacity-80 hover:scale-110 hover:opacity-100 md:text-3xl"></i> --}}
        <i class="text-2xl text-white transition ti ti-bell opacity-80 hover:opacity-100 hover:animate-rotate-wiggle md:text-3xl"></i>
        {{-- <i class="text-2xl text-white transition ti ti-settings opacity-80 hover:scale-110 hover:opacity-100 md:text-3xl"></i> --}}
        <i class="text-2xl text-white transition ti ti-settings opacity-80 hover:animate-spin hover:opacity-100 md:text-3xl"></i>
    </div>
</div>
