{{-- <div x-data="{ activeSlide: 0, slides: {{ json_encode($carouselItems) }}, interval: null }" x-init="interval = setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 5000)" class="relative h-fit w-fit overflow-hidden rounded-md">
    <!-- Slides Container -->
    <div class="ibm-plex-sans-regular flex transition-transform duration-1000 ease-in-out" :style="`transform: translateX(-${activeSlide * 100}%)`">
        <template x-for="(slide, index) in slides" :key="index">
            <div class="flex h-fit w-full flex-shrink-0 items-center justify-center">
                <!-- Link Wrapper -->
                <a :href="slide.link" target="_blank" class="relative flex w-full flex-col overflow-hidden rounded-md border border-white/10">
                    <!-- Gambar -->
                    <img :src="slide.image" alt="Carousel Image" class="h-full w-full rounded-md object-cover">

                    <!-- Overlay untuk teks -->
                    <div class="absolute -bottom-2 w-full min-h-[80%] flex flex-col justify-end bg-gradient-to-t from-black to-transparent px-4 py-4">
                        <!-- Judul -->
                        <h1 class="line-clamp-2 text-base font-semibold uppercase tracking-wide text-white"
                            x-text="slide.title"></h1>
                        <!-- Penyelenggara -->
                        <p class="text-xs text-gray-300">
                            <span class="font-medium" x-text="slide.organizer"></span>
                        </p>
                    </div>
                </a>
            </div>
        </template>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-2 left-0 right-0 flex justify-center space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="activeSlide = index"
                :class="{ 'bg-white': activeSlide === index, 'bg-gray-400': activeSlide !== index }"
                class="h-3 w-3 rounded-full transition-colors duration-200"></button>
        </template>
    </div>

    <!-- Navigation Buttons -->
    <button @click="activeSlide = (activeSlide > 0) ? activeSlide - 1 : slides.length - 1"
        class="absolute left-0 top-1/2 -translate-y-1/2 transform rounded-full bg-black bg-opacity-30 p-2 text-white hover:bg-opacity-50">
        &#9664;
    </button>
    <button @click="activeSlide = (activeSlide < slides.length - 1) ? activeSlide + 1 : 0"
        class="absolute right-0 top-1/2 -translate-y-1/2 transform rounded-full bg-black bg-opacity-30 p-2 text-white hover:bg-opacity-50">
        &#9654;
    </button>
</div> --}}
<div x-data="{ activeSlide: 0, slides: {{ json_encode($carouselItems) }}, interval: null, loading: true }"
    x-init="
        setTimeout(() => loading = false, 2000); // Simulasi loading selama 2 detik
        interval = setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 5000);
    "
    class="relative h-fit w-fit overflow-hidden rounded-md">

    <!-- Skeleton Loader -->
    <template x-if="loading">
        <div class="space-y-4 p-4">
            <!-- Skeleton untuk gambar -->
            <div class="h-48 w-full bg-gray-300 animate-pulse rounded-md"></div>
            <!-- Skeleton untuk teks -->
            <div class="space-y-2">
                <div class="h-4 w-3/4 bg-gray-300 animate-pulse rounded"></div>
                <div class="h-4 w-1/2 bg-gray-300 animate-pulse rounded"></div>
            </div>
        </div>
    </template>

    <!-- Carousel -->
    <template x-if="!loading">
        <div>
            <!-- Slides Container -->
            <div class="ibm-plex-sans-regular flex transition-transform duration-1000 ease-in-out" :style="`transform: translateX(-${activeSlide * 100}%)`">
                <template x-for="(slide, index) in slides" :key="index">
                    <div class="flex h-fit w-full flex-shrink-0 items-center justify-center">
                        <!-- Link Wrapper -->
                        <a :href="slide.link" target="_blank" class="relative flex w-full flex-col overflow-hidden rounded-md border border-white/10">
                            <!-- Gambar -->
                            <img :src="slide.image" alt="Carousel Image" class="h-full w-full rounded-md object-cover">

                            <!-- Overlay untuk teks -->
                            <div class="absolute -bottom-2 w-full min-h-[80%] flex flex-col justify-end bg-gradient-to-t from-black to-transparent px-4 py-4">
                                <!-- Judul -->
                                <h1 class="line-clamp-2 text-base font-semibold uppercase tracking-wide text-white"
                                    x-text="slide.title"></h1>
                                <!-- Penyelenggara -->
                                <p class="text-xs text-gray-300">
                                    <span class="font-medium" x-text="slide.organizer"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

            <!-- Navigation Dots -->
            {{-- <div class="absolute bottom-2 left-0 right-0 flex justify-center space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index"
                        :class="{ 'bg-white': activeSlide === index, 'bg-gray-400': activeSlide !== index }"
                        class="h-3 w-3 rounded-full transition-colors duration-200"></button>
                </template>
            </div> --}}

            <!-- Navigation Buttons -->
            <button @click="activeSlide = (activeSlide > 0) ? activeSlide - 1 : slides.length - 1"
                class="absolute left-0 top-1/2 -translate-y-1/2 transform rounded-full bg-black bg-opacity-30 p-2 text-white hover:bg-opacity-50">
                &#9664;
            </button>
            <button @click="activeSlide = (activeSlide < slides.length - 1) ? activeSlide + 1 : 0"
                class="absolute right-0 top-1/2 -translate-y-1/2 transform rounded-full bg-black bg-opacity-30 p-2 text-white hover:bg-opacity-50">
                &#9654;
            </button>
        </div>
    </template>
</div>

