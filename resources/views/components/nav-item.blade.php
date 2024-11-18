<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->


<!-- Check if the item is active or inactive -->
@if ($active)
    <!-- Active -->
    <div class="rounded-lg bg-gradient-to-r from-[#ffffff50] via-[#cccccc50] to-[#ffffff50] p-[1px]">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-white/10 shadow-xl shadow-gray-900/20 backdrop-blur-md md:h-14 md:w-14">
            <i class="ti {{ $icon }} text-2xl text-white opacity-90 md:text-3xl"></i>
        </div>
    </div>
@else
    <!-- Inactive -->
    <div class="group flex items-center justify-center">
        <div class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/20 md:h-14 md:w-14">
            <i class="ti {{ $icon }} text-2xl text-white opacity-60 transition group-hover:opacity-80 md:text-3xl"></i>
        </div>
    </div>
@endif
