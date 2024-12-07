<!-- Login Modal -->
<div id="modal" class="fixed inset-0 items-center justify-center hidden bg-opacity-50 bg-black/20 backdrop-blur-sm">
    <div class="bg-[#191919] text-white p-6 flex flex-col relative gap-4 rounded-lg shadow-lg w-[50%] md:w-[30%]">
        <!-- close button -->
        <div class="absolute -top-2 -right-2">
            <button id="closeModal" class="bg-[#292929] text-white text-2xl shadow-lg p-2 flex items-center justify-center hover:bg-[#494949] hover:shadow-xl hover:scale-110 active:scale-95 transition duration-200 ease-in-out">
                <i class="ti ti-x"></i>
            </button>
        </div>

        @auth
        <h1 class="text-2xl tracking-wide uppercase ">Are You Want To Logout?</h1>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="w-full items-center transition duration-200 ease-in-out flex justify-center relative bg-[#292929] py-2">
                <div class="flex items-center justify-center gap-2 transition duration-200 ease-in-out hover:scale-105 active:scale-100">
                    <span class="text-base ibm-plex-sans-light">Logout</span>
                </div>
            </button>
        </form>
        @endauth

        @guest
        <h1 class="text-2xl tracking-wide uppercase ">SIGN IN INTO YOUR ACCOUNT</h1>
        <!-- google button login -->
        <button onclick="window.location.href='/auth/google/redirect'" class="w-full items-center transition duration-200 ease-in-out flex justify-center relative bg-[#292929] py-2">
            <img class="h-[1.2em] w-[1.2em] hover:scale-125 active:scale-100 transition duration-200 ease-in-out left-5 absolute" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg"/>
            <div class="flex items-center justify-center gap-2 transition duration-200 ease-in-out hover:scale-105 active:scale-100">
                <span class="text-base ibm-plex-sans-light">Sign in with Google</span>
            </div>
        </button>
        @endguest
    </div>
</div>
<!-- Login Modal -->

<!-- Login Modal -->
<script type="module">
    $(document).ready(function () {
        $('#openModal').click(function () {
            $('#modal').removeClass('hidden').addClass('flex');
        });

        $('#closeModal').click(function () {
            $('#modal').removeClass('flex').addClass('hidden');
        });

        // Tutup modal jika klik di luar area modal
        $('#modal').click(function (e) {
            if ($(e.target).is('#modal')) {
            $('#modal').removeClass('flex').addClass('hidden');
            }
        });
    });
</script>
