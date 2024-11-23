<!-- Modal -->
<div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/20 backdrop-blur-sm bg-opacity-50">
    <div class="bg-[#191919] text-white p-6 flex flex-col relative gap-4 rounded-lg shadow-lg w-[50%] md:w-[30%]">
        <!-- close button -->
        <div class="absolute -top-2 -right-2">
            <button id="closeModal" class="bg-[#292929] text-white text-2xl shadow-lg p-2 flex items-center justify-center hover:bg-[#494949] hover:shadow-xl hover:scale-110 active:scale-95 transition duration-200 ease-in-out">
                <i class="ti ti-x"></i>
            </button>
        </div>

        <h1 class="text-2xl uppercase tracking-wide ">SIGN IN INTO YOUR ACCOUNT</h1>
        <!-- google button login -->
        <button onclick="window.location.href='/auth/google/redirect'" class="w-full items-center hover:scale-105 active:scale-100 transition duration-200 ease-in-out flex justify-center relative bg-[#292929] py-2">
            <img class="h-[1.2em] w-[1.2em] hover:scale-125 active:scale-100 transition duration-200 ease-in-out left-5 absolute" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg"/>
            <div class="flex items-center justify-center gap-2 hover:scale-105 active:scale-100 transition duration-200 ease-in-out">
                <span class="text-base ibm-plex-sans-light">Sign in with Google</span>
            </div>
        </button>

        {{-- <button class="w-full items-center hover:scale-105 active:scale-100 transition duration-200 ease-in-out flex justify-center relative bg-[#292929] py-2">
            <img class="h-[1.2em] w-[1.2em] hover:scale-125 active:scale-100 transition duration-200 ease-in-out left-5 absolute" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg"/>
            <div class="flex items-center justify-center gap-2 hover:scale-105 active:scale-100 transition duration-200 ease-in-out">
                <span class="text-base ibm-plex-sans-light">Sign in with Google</span>
            </div>
        </button> --}}

    </div>
</div>
