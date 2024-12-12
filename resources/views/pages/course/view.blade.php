<x-app-layout title="course">
    <div x-data="{ activeTab: 'home' }" class="w-full max-w-[1700px]">
        <div class="h-full pt-4 overflow-hidden">
            <!--Tabs-->
            <div class="flex flex-col w-full gap-2 mb-2">
                <!-- Tab Items -->
                <div class="flex border-b-2 border-[#8c8c8c]">
                    <button @click="activeTab = 'home'"
                        :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'home'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        Home
                    </button>
                    <button @click="activeTab = 'recent'"
                        :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'recent'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        Recent Course
                    </button>
                    <button @click="activeTab = 'favorite'"
                        :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'favorite'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        Favorite
                    </button>
                    <button @click="activeTab = 'project'"
                        :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'project'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        My Project
                    </button>
                </div>
                <!-- Tab Items -->

                <!-- Filter and Shortby -->
                <div class="relative flex w-full gap-2 w-max-full whitespace-nowrap">
                    <!--Button Left-->
                    <div class="flex flex-none gap-2">
                        <button class="flex items-center justify-center space-x-2">
                            <i class="text-xl text-white transition ti ti-filter-plus"></i>
                            <span class="text-white text-md">Add Category</span>
                        </button>
                        <button class="flex items-center justify-center">
                            <span class="text-white text-md">Reset</span>
                        </button>
                    </div>
                    <!--Category Slider-->
                    <div class="flex-1 pt-2 overflow-hidden">
                        <div class="flex w-full gap-4 overflow-x-auto no-scrollbar">
                            @for ($i = 1; $i <= 18; $i++)
                            <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-[0.25rem]">
                                <span class="text-sm text-white">Category {{$i}}</span>
                                <button class="text-sm text-white hover:text-red-500">
                                    <i class="ti ti-x"></i>
                                </button>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <!--Orderby-->
                    <div class="flex-none pt-1">
                        <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
                            <button class="text-lg text-white">
                                <i class="ti ti-sort-descending"></i>
                            </button>
                            <span class="text-lg text-white">Popular</span>
                        </div>
                    </div>

                </div>
                <!-- Filter and Shortby -->

            </div>
            <!--Tabs-->

            <!--Content-->
            <div class="h-full">
                <div x-show="activeTab === 'home'" class="h-full pt-4 overflow-y-auto pb-[7%]">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center">
                        @for ($i = 0; $i < 10; $i++)
                        <!--Moving Gradient Card Alpine Array-->
                        <div x-data="{
                                deg: 0,
                                direction: 1,
                                colors: ['#FC466B', '#3F5EFB'], // Array warna gradien
                            }"
                            x-init="setInterval(() => {
                                deg += direction * 5.1;
                                if (deg >= 720 || deg <= 0) {
                                    direction *= -1;  // Membalik arah putaran
                                }
                            }, 50)"
                            :style="`background: linear-gradient(${deg}deg, ${colors.join(', ')})`"
                            class="lg:w-[325] xl:w-[385px] bg-[#000000] shadow-xl overflow-hidden relative rounded-lg p-1 z-10">

                            <div class="w-full h-full bg-black rounded-lg">
                                <!-- Course Cover -->
                                <img class="object-cover w-full aspect-[16/9] rounded-lg" src="https://as1.ftcdn.net/v2/jpg/05/40/88/30/1000_F_540883010_iQNEDYQ48PEXiQd9oefyVDcEpWQN9Ahq.jpg" alt="">

                                <!-- Course Author Info & Details -->
                                <div class="absolute flex items-center justify-between px-3 py-2 w-[97.5%] -mt-8 bg-gradient-to-t from-black via-black/75 to-transparent">
                                    <div class="flex items-center gap-2 font-light">
                                        <i class="text-lg ti ti-user"></i>
                                        <span class="text-md">John Doe</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-sm">
                                        <span><span class="font-semibold">17</span> lessons</span> •
                                        <span><span class="font-semibold">3</span> quizzes</span>
                                    </div>
                                </div>

                                <!-- Course Title -->
                                <h1 class="px-3 mt-4 text-lg font-semibold line-clamp-2">
                                    Belajar Salto Dengan Asep Knalpot Di Telkom University Bersama Pak Dadang
                                </h1>

                                <!-- Course Category -->
                                <div class="flex flex-wrap gap-2 px-3 mt-3">
                                    <span class="px-3 py-1 text-sm bg-[#222222] rounded-md">Sports</span>
                                    <span class="px-3 py-1 text-sm bg-[#222222] rounded-md">Education</span>
                                    <span class="px-3 py-1 text-sm bg-[#222222] rounded-md">Education</span>
                                    <span class="px-3 py-1 text-sm bg-[#222222] rounded-md">Education</span>
                                    <span class="px-3 py-1 text-sm bg-[#222222] rounded-md">6+</span>
                                </div>

                                <!-- Course Detail Button & Exp Reward -->
                                <div class="flex items-center justify-between px-3 mt-2 mb-3">
                                    <!-- EXP Reward -->
                                    <div class="flex items-center w-full gap-1 text-lg font-medium">
                                        <i class="ti ti-bolt-filled"></i>
                                        <span>200 EXP</span>
                                    </div>
                                    <div class="flex items-center w-full gap-1 mr-3 text-lg font-medium">
                                        <i class="ti ti-diamonds-filled"></i>
                                        <span>200 Core</span>
                                    </div>

                                    <!-- Button -->
                                    <button onclick="window.location.href='/course/chapter'" class="px-6 py-2 text-base font-semibold text-black bg-white rounded-md hover:bg-gray-200">
                                        View
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <!-- Recent Course Tab -->
                <div x-show="activeTab === 'recent'" class="p-4 border rounded bg-gray-50">
                    <h2 class="text-lg font-semibold">Recent Course</h2>
                    <p>Here are the courses you recently accessed.</p>
                </div>

                <!-- Favorite Tab -->
                <div x-show="activeTab === 'favorite'" class="p-4 border rounded bg-gray-50">
                    <h2 class="text-lg font-semibold">Favorite</h2>
                    <p>Here are your favorite courses.</p>
                </div>

                <!-- My Project Tab -->
                <div x-show="activeTab === 'project'" class="p-4 border rounded bg-gray-50">
                    <h2 class="text-lg font-semibold">My Project</h2>
                    <p>Manage your personal projects here.</p>
                </div>
            </div>
            <!--Content-->

        </div>
    </div>
</x-app-layout>


@include('pages.course.script')
@include('pages.course.modal')
