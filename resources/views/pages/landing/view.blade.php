<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Constellations</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Head -->
    @include('scaffold.head')

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <div class="w-full h-full">
        <!--Main Content-->
        <!--Sticky Header-->
        {{-- <div class="sticky top-0 z-20 py-5 backdrop-blur-[0.7px] border border-[#ffffff]/5 bg-[#000000]/[32%] shadow-md">
            <div class="absolute p-4 bg-white left-32 top-3"></div>
            <div class="flex items-center justify-center gap-4 text-white">

                <a href="#">Dashboard</a>
                <a href="#">Teams</a>
                <a href="#">Projects</a>

            </div>
            <div class="absolute top-3 right-32">
                <a href="#" class="flex p-[0.8] rounded-lg " x-data="{deg: 0, direction: 1, colors: ['#d4d4d4','#3d3d3d'] }"
                    x-init="setInterval(() => {deg += direction * 5.1; if (deg >= 720 || deg <= 0) {direction *= -1;}}, 50)"
                    :style="`background: linear-gradient(${deg}deg, ${colors.join(', ')})`">
                    <div class="flex gap-2 px-2 py-1 rounded-lg backdrop-blur-xl bg-[#000000]/90">
                        <i class="text-xl text-white transition ti ti-fingerprint"></i>
                        <span class="text-xl text-white">Join Us</span>
                    </div>
                </a>
            </div>
        </div> --}}
        <div class="absolute z-10 w-full h-full overflow-hidden overflow-y-auto">

            <!--Sticky Header-->
            <div class="w-full absolute top-0 z-20 py-5 backdrop-blur-[0.7px] border border-[#ffffff]/5 bg-[#000000]/[32%] shadow-md">
                <div class="absolute p-4 bg-white left-32 top-3"></div>
                <div x-data="{
                        active: 0,
                        menuItems: ['Dashboard', 'Teams', 'Projects'],
                        moveBox(index) {
                            this.active = index;
                        }
                    }"
                    class="relative flex items-center justify-center gap-8 text-white">
                    <!-- Hover and Active Effect Box -->
                    <div
                        x-show="true"
                        x-transition
                        x-bind:style="`transform: translateX(${active * 100}%); width: 100px;`"
                        class="absolute bottom-0 h-1 transition-all duration-300 bg-blue-500 rounded">
                    </div>

                    <!-- Menu Items -->
                    <template x-for="(item, index) in menuItems" :key="index">
                        <a id="openModal" href="#"
                           @mouseover="moveBox(index)"
                           @click="moveBox(index)"
                           class="relative px-4 py-2 text-lg font-medium transition duration-300 hover:text-blue-400">
                            <span x-text="item"></span>
                        </a>
                    </template>
                </div>
                <div class="absolute top-3 right-32">
                    <button onclick="window.location.href='/auth/google/redirect'" class="flex p-[0.8] rounded-lg " x-data="{deg: 0, direction: 1, colors: ['#d4d4d4','#3d3d3d'] }"
                        x-init="setInterval(() => {deg += direction * 5.1; if (deg >= 720 || deg <= 0) {direction *= -1;}}, 50)"
                        :style="`background: linear-gradient(${deg}deg, ${colors.join(', ')})`">
                        <div class="flex gap-2 px-2 py-1 rounded-lg backdrop-blur-xl bg-[#000000]/90">
                            <i class="text-xl text-white transition ti ti-fingerprint"></i>
                            <span class="text-xl text-white">Join Us</span>
                        </div>
                    </button>
                </div>
            </div>

            <!--Dashboard-->
            {{-- <div class="w-screen h-full bg-[#ffffff]/20"></div>
            <!--Teams-->
            <div class="w-screen h-full bg-[#73b8d6]/20"></div>
            <!--Projects-->
            <div class="w-screen h-full bg-[#82d673]/20"></div> --}}
            <div class="absolute w-full h-full overflow-y-auto snap-container">
                <!-- Dashboard Section -->
                <div class="w-full h-screen bg-[#ffffff]/20 snap-item"></div>
                <!-- Teams Section -->
                <div class="w-full h-screen bg-[#73b8d6]/20 snap-item"></div>
                <!-- Projects Section -->
                <div class="w-full h-screen bg-[#000000]/10 snap-item"></div>
            </div>

            <style>
            /* Container: Enable snap behavior */
            .snap-container {
                scroll-snap-type: y mandatory; /* Vertical snap */
                scroll-behavior: smooth;      /* Smooth scrolling */
            }

            /* Each section will snap to the top */
            .snap-item {
                scroll-snap-align: start; /* Snap item to top */
                height: 100vh;           /* Each section fills the viewport */
            }
            </style>


        </div>

        <!--Background Bintang Jatuh-->
        <div class="w-full h-full particles"></div>

        <!--Background Bintang-->
        <div class="w-full h-full star-background"></div>
    </div>

</body>

</html>
@include('pages.landing.script')
@include('pages.landing.modal')
