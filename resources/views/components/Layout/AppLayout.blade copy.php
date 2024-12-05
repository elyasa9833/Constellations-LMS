<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Constellations - {{$title}}</title>

    <!-- Include Head -->
    @include('scaffold.head')

    <!-- Include Font -->
    @include('scaffold.font.IBM_Plex_Sans')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            opacity : 0;
            transition : opacity 1s ease;
        }

        /* CSS untuk efek fade */
        .load-container {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .loaded {
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased ibm-plex-sans-regular bg-[#191919]" onload="document.body.classList.add('loaded')">
    <div>
        <img class="h-[1.2em] w-[1.2em] hover:scale-125 active:scale-100 transition duration-200 ease-in-out left-5 absolute" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg"/>
    </div>

    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <!-- Scafold -->
    <div id="content" class="fixed flex w-full h-screen load-container">

        <!-- Side Nav -->
        <div class="top-0 bottom-0 flex flex-col justify-between px-2 bg-black max-w-fit md:px-3">
            <!-- Menu items Top -->
            <div class="flex flex-col items-center gap-4">
                <!-- Logo -->
                <img class="mt-4 h-11 w-11" src="{{ asset('assets/icons/Icon Dark.svg') }}" alt="Logo">
                <!-- Logo -->
                <!-- Nav Item -->
                @php
                    $menus = [
                        ['icon' => 'ti-school', 'route' => 'dashboard', 'title' => 'Dashboard', 'url' => url('/dashboard')],
                        ['icon' => 'ti-book', 'route' => 'course', 'title' => 'Course', 'url' => url('/course')],
                        // ['icon' => 'ti-cube-spark', 'route' => 'user', 'title' => 'User', 'url' => url('/dashboard')],
                        ['icon' => 'ti-puzzle', 'route' => 'template', 'title' => 'User', 'url' => url('/template')],
                    ];
                @endphp

                @foreach ($menus as $menu)
                <x-nav-item :icon="$menu['icon'] " :active=" Request::is($menu['route'].'*') ? '1' : ''" :title=" $menu['title']" :url=" $menu['url']"/>
                @endforeach
                {{-- <x-nav-item icon="ti-school" active="1" />
                @foreach (['ti-bolt', 'ti-code', 'ti-cube-spark', 'ti-puzzle'] as $icon)
                <x-nav-item icon="{{ $icon }}" active="" />
                @endforeach --}}
                <!-- Nav Item -->
            </div>
            <!-- Menu items Top -->

            <!-- Menu item Bottom -->
            <div class="flex items-center justify-center mb-4 rounded-lg group" data-tilt data-tilt-reverse="true" data-tilt-glare="true" data-tilt-max-glare="0.5">
                <button id="openModal" class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
                    <i class="text-2xl text-white transition ti ti-user-hexagon opacity-80 group-hover:opacity-100 md:text-3xl"></i>
                </button>
            </div>
            <!-- Menu item Bottom -->

        </div>
        <!-- Side Nav -->

        <!-- Main Container -->
        <div class="flex flex-1 flex-col gap-4 overflow-y-auto bg-[#191919] text-white p-6">

            <!-- Header -->
            <x-header title="{{$title}}" />
            <!-- Header -->

            <!-- Main Content -->
                <div class="flex justify-center max-h-[1080px]">
                    <!-- Page Content -->
                    {{ $slot }}
                    <!-- Page Content -->
                </div>
        </div>
        <!-- Main Container -->

    </div>

    <!-- Tilt Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/vanilla-tilt.js')}}"></script>

    <!--Include Login Modal-->
    @include('scaffold.modal.login')

    <script>
        // const loadContainer = document.querySelector('.load-container');
        // if (loadContainer) {
            //     loadContainer.classList.add('loaded');
            // }
    // Fade In
    window.onload = function () {
        document.body.classList.add('loaded')
        document.querySelector('.load-container').classList.add('loaded');
    };

    // fade out body saat navigasi
    window.addEventListener("beforeunload", function() {
        document.getElementById('content').style.opacity = "0";
        setTimeout(function() {
            document.body.style.opacity = "0";
        }, 8500);
    });

    // Fade Out
    // const links = document.querySelectorAll('a');
    //     links.forEach(link => {
    //         link.addEventListener('click', function(e) {
    //             e.preventDefault();  // Mencegah navigasi langsung
    //             const target = this.getAttribute('href');

    //             document.getElementById('content').style.opacity = "0"; // Mulai transisi keluar (opacity ke 0)

    //             // Menunggu transisi selesai sebelum berpindah
    //             setTimeout(function() {
    //                 window.location.href = target; // Navigasi setelah transisi selesai
    //             }, 1500); // Waktu yang sama dengan durasi transisi
    //     });
    // });
    </script>



</body>
</html>
