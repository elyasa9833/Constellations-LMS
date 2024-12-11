<x-app-layout title="Course">
    {{-- <div x-data="{ showMenu: false }" class="flex w-full gap-8 mt-4 overflow-hidden">
        <!-- Main Content -->
        <div :class="showMenu ? 'mr-[0px]' : '-mr-[30%]'"
            class="flex flex-1 p-8 transition-all duration-300 bg-slate-400">
            <!-- Your content here -->
            <p>Main content area</p>
            <!-- Button to Trigger Menu -->
            <button @click="showMenu = !showMenu" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                Trigger Menu
            </button>
        </div>

        <!-- Hidden Menu -->
        <div :class="showMenu ? 'translate-x-0' : 'translate-x-[400px]'"
            class=" bg-white p-8 w-[380px] h-full transition-transform duration-300 shadow-lg">
            <!-- Your hidden content here -->
            <p>Menu content goes here.</p>
        </div>
    </div> --}}

    {{-- <div x-data="{ showMenu: false }"
        class="relative flex max-w-[1980px] w-full gap-8 mt-4 overflow-hidden mb-[7%]">

        <!-- Main Content -->
        <div :class="showMenu ? 'mr-[380px]' : 'mr-0'"
            class="flex-1 overflow-hidden transition-all duration-300 bg-slate-400">

            <div class="min-h-full overflow-y-auto">
                <!-- Button to Trigger Menu -->
                <button @click="showMenu = !showMenu"
                    class="px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Trigger Menu
                </button>

                <!--Content-->
                <div>
                    <!--dummy loop item-->
                    @for ($i = 0; $i < 10; $i++) <p>Dummy</p>@endfor
                </div>
                <!--Content-->



            </div>

        </div>

        <!-- Right Menu -->
        <div :class="showMenu ? 'translate-x-0 opacity-100' : 'translate-x-[100%] opacity-0'"
            class="absolute top-0 right-0 w-[380px] h-full transition-transform duration-300 shadow-lg pl-4">
            <div class="bg-[#636363] w-full h-full">
                <p>asdasfkahsdaskjldhasd</p>
            </div>
        </div>


    </div> --}}

    <div x-data="{ showMenu: true }" class="relative w-full max-w-[1700px] flex mb-[9%] mt-6">

        <!-- Main Content -->
        <div :class="showMenu ? 'mr-[380px] pr-4' : 'mr-0 px-8'" class="flex-1 transition-all duration-300">

            <!-- Bisa buat Header -->
            {{-- <div class="gap-4 mb-4 text-center justify-items-center">
                <div class="w-5/12 border-white border-y-2">
                    <h1 class="my-2 text-3xl font-light">Title Chapter </h1>
                </div>
            </div> --}}
            {{-- <div class="flex gap-4 mt-3 mb-2">
                <i class="text-3xl ti ti-arrow-left-dashed "></i>
                <h1 class="text-3xl font-light">Beginner Level / Laravel Tour</h1>
            </div> --}}

            <!--Content Scrollable-->
            <div class="h-full pb-[4%] overflow-y-auto pt-4  border-[#292929] border shadow-xl rounded-md p-6">
                <div class="gap-4 mb-4 text-center justify-items-center">
                    <div class="w-5/12 border-white border-y-2">
                        <h1 class="my-2 text-3xl font-light">Title Chapter </h1>
                    </div>
                </div>
                <h1 class="text-2xl">Laravel Tour</h1>
                @for ($i = 0; $i < 100; $i++)
                    <p class="mt-5 text-justify">Lorem ipsum odor amet, consectetuer adipiscing elit. Nunc mollis ad hac phasellus volutpat cubilia a netus. Amet ornare metus eros sem consectetur non. Adipiscing venenatis accumsan neque turpis urna varius dolor lectus sociosqu. Integer urna egestas sapien eleifend, eleifend augue parturient a. Magnis blandit platea, himenaeos porta diam volutpat leo. Volutpat eu pharetra convallis; mus justo adipiscing. Tempus ornare fringilla erat porttitor efficitur cubilia eleifend. Lacus magna ligula platea condimentum fringilla.</p>
                @endfor
            </div>

            <!-- Footer Button Next & Prev -->
            <div class="relative flex w-full pt-4">
                <button class="absolute left-0 flex items-center px-3 py-[0.2rem] gap-2 rounded-md bg-[#292929] shadow-xl">
                    <i class="text-xl ti ti-chevron-left"></i>
                    <span>Prev Section</span>
                </button>
                <button class="absolute right-0 flex items-center px-3 py-[0.2rem] gap-2 rounded-md bg-[#292929] shadow-xl">
                    <span>Next Section</span>
                    <i class="text-xl ti ti-chevron-right"></i>
                </button>
            </div>

            {{-- <div class="h-full mb-[4%] overflow-y-auto">
                <button @click="showMenu = !showMenu"
                    class="px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Trigger Menu
                </button>
                <!--Content-->
                <div>
                    <!--dummy loop item-->
                    @for ($i = 0; $i < 100; $i++) <p>{{$i}}</p>@endfor
                </div>
                <!--Content-->
            </div> --}}

        </div>

        <!-- Right Menu -->
        <div :class="showMenu ? 'translate-x-0' : 'translate-x-[100%]'" class="absolute top-0 right-0 w-[380px] h-full transition-transform duration-300 shadow-lg pl-4">
            <div class="absolute -left-5 top-4">
                <button @click="showMenu = !showMenu" class="bg-[#292929] text-white text-2xl shadow-lg p-2 flex items-center justify-center hover:bg-[#494949] hover:shadow-xl hover:scale-110 active:scale-95 transition duration-200 ease-in-out">
                    <i class="ti ti-list-details"></i>
                </button>
            </div>
            <div :class="showMenu ? 'opacity-100' : 'opacity-0'" class="w-full h-full border border-[#292929] rounded-md shadow-xl">
                {{-- <button @click="showMenu = !showMenu"
                    class="px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Trigger Menu
                </button> --}}
            </div>
        </div>

    </div>

    {{-- <div
        class="absolute flex justify-between bottom-0 w-full bg-gradient-to-t from-[#191919] via-[#191919]/75 to-transparent p-2">
        <!-- tombol next  & prev-->
        <button>
            <i class="text-white ti ti-angle-left"></i>
            <span class="text-white">Prev</span>
        </button>
        <button>
            <span class="text-white"></span>Next</span>
            <i class="text-white ti ti-angle-right"></i>
        </button>
    </div> --}}


</x-app-layout>

@include('pages.course_chapter.script')
@include('pages.course_chapter.modal')
