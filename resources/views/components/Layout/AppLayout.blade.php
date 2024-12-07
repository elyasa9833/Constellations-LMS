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
        /* CSS untuk efek fade */
        .loading-layer {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .load-container {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .loaded {
            opacity: 1;
        }

        @layer utilities {

            /* Glow effect for the logo */
            .glow-effect {
                filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5));
            }

            .animate-smooth-fade {
                font-size: 2rem;
                font-weight: 600;
                color: white;
                /* Fallback color for browsers without gradient support */
                background: linear-gradient(90deg,
                        rgba(100, 100, 100, 1) 0%,
                        rgba(255, 255, 255, 1) 25%,
                        rgba(255, 255, 255, 1) 50%,
                        rgba(255, 255, 255, 1) 75%,
                        rgba(100, 100, 100, 1) 100%);
                background-size: 200%;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: glowMove 3.5s infinite linear;
            }

            /* Keyframes for the moving glow */
            @keyframes glowMove {
                0% {
                    background-position: 200% 0;
                }

                100% {
                    background-position: -200% 0;
                }
            }

            /* Slow bounce effect for logo */
            .animate-slow-bounce {
                animation: slowBounce 2s infinite cubic-bezier(0.25, 1, 0.5, 1);
            }

            @keyframes slowBounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-10px);
                }
            }
        }
    </style>
</head>

<body class="antialiased ibm-plex-sans-regular bg-[#191919]">
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <div id="loading"
        class="fixed inset-0 z-10 flex items-center justify-center w-full h-full bg-opacity-50 bg-black/10 backdrop-blur-md loading-layer">
        <div class="flex flex-col items-center justify-center">
            <!-- Logo with subtle glow effect -->
            <img class="w-28 h-28 md:w-40 md:h-40 animate-slow-bounce glow-effect" src="{{ asset('assets/icons/Icon Dark.svg') }}"
                alt="Logo" />
            <!-- Elegant Loading Text -->
            <div class="mt-4 text-xl md:text-2xl font-semibold tracking-wide text-white opacity-90 animate-smooth-fade">
                Please wait...
            </div>
        </div>
    </div>

    <!-- Scafold -->
    <div id="content" class="fixed flex w-full h-full load-container">

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
                <x-nav-item :icon="$menu['icon'] " :active=" Request::is($menu['route'].'*') ? '1' : ''"
                    :title=" $menu['title']" :url=" $menu['url']" />
                @endforeach
                {{--
                <x-nav-item icon="ti-school" active="1" />
                @foreach (['ti-bolt', 'ti-code', 'ti-cube-spark', 'ti-puzzle'] as $icon)
                <x-nav-item icon="{{ $icon }}" active="" />
                @endforeach --}}
                <!-- Nav Item -->
            </div>
            <!-- Menu items Top -->

            <!-- Menu item Bottom -->
            <div class="flex items-center justify-center mb-4 rounded-lg group" data-tilt data-tilt-reverse="true"
                data-tilt-glare="true" data-tilt-max-glare="0.5">
                <button id="openModal"
                    class="flex h-11 w-11 items-center justify-center rounded-lg shadow-lg shadow-gray-900/10 backdrop-blur-sm transition group-hover:scale-110  opacity-80 group-hover:bg-gradient-to-tl from-[#ffffff2a] via-[#cccccc50] to-[#ffffff2a] hover:border hover:border-white/20 md:h-14 md:w-14">
                    @auth
                        <img src="{{auth()->user()->avatar}}" alt="foto profil" class="rounded-full">
                    @endauth

                    @guest
                    <i
                    class="text-2xl text-white transition ti ti-user-hexagon opacity-80 group-hover:opacity-100 md:text-3xl"></i>
                    @endguest
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
            <div class="flex justify-center max-h-[1080px]" id="layout-container">
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
        // Fade In
    window.onload = function () {
        const slotTitle = "{{  strtolower($title) }}".l;
        const slotContainer = document.getElementById('layout-container');

        function loadSlotContent(slotName) {
            fetch(`/slot/${slotName}`)
            .then(response => response.text())
            .then(data => {
                slotContainer.innerHTML = data;
            })
            .catch(error => console.error('Error loading slot:', error));
        }

        // loadSlotContent(slotTitle);
        document.querySelector('.loading-layer').classList.add('loaded');
        setTimeout(() => {
            document.querySelector('.load-container').classList.add('loaded');
        }, 500);
        setTimeout(() => {
            document.getElementById('loading').style.opacity = "0";
        }, 1000);
        setTimeout(() => {
            document.getElementById('loading').style.display = "none";
        }, 1800);
    };

    // Fade Out
    const links = document.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah navigasi langsung
            const target = this.getAttribute('href');
            const loading = document.getElementById('loading');
            const content = document.getElementById('content');

            // 1. Fade-out konten
            content.style.opacity = "0"; // Mulai transisi konten keluar
            // setTimeout(() => {
            //     // 2. Munculkan loading layer secara bertahap
            //     loading.style.display = "flex";
            //     setTimeout(() => {
            //         loading.style.opacity = "1";
            //     }, 100);
            // }, 500);

            // 3. Fade-out loading layer secara perlahan
            // setTimeout(() => {
            //     loading.style.opacity = "0";
            // }, 1200);

            // 4. Navigasi setelah semua transisi selesai
            setTimeout(() => {
                window.location.href = target;
            }, 500);
        });
    });

    </script>
</body>

</html>
