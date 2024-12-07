{{-- <x-app-layout title="course">

</x-app-layout> --}}
<x-app-layout title="course">
    <div class="container min-w-full">
        <!-- Tabs -->
        <div x-data="{ activeTab: 'home' }" class="flex flex-col gap-4">
            <div class="flex space-x-4 border-b-2 border-[#8c8c8c]">
                <!-- Tab Items -->
                <button @click="activeTab = 'home'"
                    :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'home'}"
                    class="px-4 py-2 text-[#8c8c8c] hover:text-whtborder-white focus:outline-none -mb-[2px]">
                    Home
                </button>
                <button @click="activeTab = 'recent'"
                    :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'recent'}"
                    class="px-4 py-2 text-[#8c8c8c] hover:text-whtborder-white focus:outline-none -mb-[2px]">
                    Recent Course
                </button>
                <button @click="activeTab = 'favorite'"
                    :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'favorite'}"
                    class="px-4 py-2 text-[#8c8c8c] hover:text-whtborder-white focus:outline-none -mb-[2px]">
                    Favorite
                </button>
                <button @click="activeTab = 'project'"
                    :class="{'border-b-4 text-[#ffffff] border-white text-whtborder-white': activeTab === 'project'}"
                    class="px-4 py-2 text-[#8c8c8c] hover:text-whtborder-white focus:outline-none -mb-[2px]">
                    My Project
                </button>
            </div>

            <!-- Filter and Shortby -->
            <div class="flex items-center justify-between gap-6">
                <!-- Filter -->
                <div class="flex items-center flex-grow gap-6 overflow-hidden whitespace-nowrap">
                    <!-- Filter Button -->
                    <button class="flex items-center justify-center space-x-2">
                        <i class="text-xl text-white transition ti ti-filter-plus"></i>
                        <span class="text-white text-md">Add Category</span>
                    </button>
                    <!-- Filter Button -->

                    <!-- Reset Category -->
                    <button class="flex items-center justify-center">
                        <span class="text-white text-md">Reset</span>
                    </button>
                    <!-- Reset Category -->

                    <!-- Category Filter List -->
                    <div class="flex items-center gap-3 -mb-3 overflow-x-scroll whitespace-nowrap">
                        <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-[0.25rem]">
                            <span class="text-sm text-white">Dummy Category</span>
                            <button class="text-sm text-white hover:text-red-500">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>

                        @for ($i = 1; $i <= 18; $i++) <div
                            class="flex items-center justify-between gap-2 px-2 border border-white rounded-[0.25rem]">
                            <span class="text-sm text-white">Category {{$i}}</span>
                            <button class="text-sm text-white hover:text-red-500">
                                <i class="ti ti-x"></i>
                            </button>
                    </div>
                    @endfor
                </div>
                <!-- Category Filter List -->
            </div>
            <!-- Filter -->

            <!-- Shortby -->
            <div class="flex items-center">
                <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
                    <button class="text-lg text-white">
                        <i class="ti ti-sort-descending"></i>
                    </button>
                    <span class="text-lg text-white">Popular</span>
                </div>
            </div>
            <!-- Shortby -->
        </div>
        <!-- Filter and Shortby -->

        <!-- Tab Content -->
        <div class="">
            <!-- Home Tab -->
            {{-- <div x-show="activeTab === 'home'" class="flex flex-wrap gap-4 justify-normal align-content-center">
                --}}
                {{-- <div x-show="activeTab === 'home'"
                    class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 justify-items-center">
                    <!-- Course List -->

                    <!--Static Gradient Card-->
                    <div class="w-[150px] md:w-[200px] lg:w-[275px] xl:w-[325px] bg-[#000000] shadow-xl overflow-hidden relative rounded-lg"
                        style="background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%); padding: 3px;">
                        <!-- Inner Card -->
                        <div class="w-full h-full bg-black rounded-lg">
                            <!-- Course Cover With Author Info & Details-->
                            <div>
                                <!-- Course Cover -->
                                <img class="object-cover w-full aspect-[16/9] rounded-lg"
                                    src="https://as1.ftcdn.net/v2/jpg/05/40/88/30/1000_F_540883010_iQNEDYQ48PEXiQd9oefyVDcEpWQN9Ahq.jpg"
                                    alt="">
                                <!-- Course Author Info & Details -->
                                <div
                                    class="absolute flex items-center justify-between px-3 py-2 w-[98%] -mt-8 bg-gradient-to-t from-black via-black/75 to-transparent">
                                    <div class="flex items-center gap-2 font-light">
                                        <i class="text-lg ti ti-user"></i>
                                        <span class="text-md">John Doe</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-sm">
                                        <span><span class="font-semibold">17</span> lessons</span> •
                                        <span><span class="font-semibold">3</span> quizzes</span>
                                    </div>
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
                                <button
                                    class="px-6 py-2 text-base font-semibold text-black bg-white rounded-md hover:bg-gray-200">
                                    View
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--Normal Card-->
                    <div
                        class="w-[325px] bg-[#000000] rounded-lg border border-black shadow-xl overflow-hidden relative">
                        <!-- Course Cover -->
                        <img class="object-cover w-full aspect-[16/9] rounded-b-lg"
                            src="https://th.bing.com/th/id/OIP.xsnFrRYV0tv76TnmMmTZigHaEK?rs=1&pid=ImgDetMain" alt="">

                        <!-- Course Author Info & Details -->
                        <div
                            class="absolute flex items-center justify-between w-full px-3 py-2 -mt-8 bg-gradient-to-t from-black via-black/75 to-transparent">
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

                            <!-- Button -->
                            <button
                                class="px-6 py-2 text-base font-semibold text-black bg-white rounded-md hover:bg-gray-200">
                                View
                            </button>
                        </div>
                    </div>

                    <!-- Course List -->

                </div> --}}

                <div x-show="activeTab === 'home'"
                    class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 justify-items-center">
                    <!-- Static Gradient Card -->
                    <div class="w-[150px] md:w-[200px] lg:w-[275px] xl:w-[325px] bg-[#000000] shadow-xl overflow-hidden relative rounded-lg"
                        style="background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%); padding: 3px;">

                        <!-- Inner Card -->
                        <div class="w-full h-full bg-black rounded-lg">
                            <!-- Course Cover With Author Info & Details -->
                            <div class="relative overflow-hidden">
                                <!-- Course Cover -->
                                <img class="object-cover w-full aspect-[16/9] rounded-lg"
                                    src="https://as1.ftcdn.net/v2/jpg/05/40/88/30/1000_F_540883010_iQNEDYQ48PEXiQd9oefyVDcEpWQN9Ahq.jpg"
                                    alt="Course Cover">

                                <!-- Course Author Info & Details -->
                                <div
                                    class="absolute flex items-center justify-between px-3 py-2 w-full -mt-8 bg-gradient-to-t from-black via-black/75 to-transparent text-[0.75rem] md:text-[0.875rem] lg:text-[1rem] xl:text-[1.125rem]">
                                    <div class="flex items-center gap-2 font-light">
                                        <i class="text-lg ti ti-user"></i>
                                        <span>John Doe</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span>
                                            <span class="font-semibold">17</span> lessons
                                        </span>
                                        •
                                        <span>
                                            <span class="font-semibold">3</span> quizzes
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Title -->
                            <h1
                                class="px-3 mt-4 font-semibold line-clamp-2 text-[0.875rem] md:text-[1rem] lg:text-[1.125rem] xl:text-[1.25rem]">
                                Belajar Salto Dengan Asep Knalpot Di Telkom University Bersama Pak Dadang
                            </h1>

                            <!-- Course Category -->
                            <div
                                class="flex flex-wrap gap-2 px-3 mt-3 text-[0.75rem] md:text-[0.875rem] lg:text-[1rem] xl:text-[1.125rem]">
                                <span class="px-3 py-1 bg-[#222222] rounded-md">Sports</span>
                                <span class="px-3 py-1 bg-[#222222] rounded-md">Education</span>
                                <span class="px-3 py-1 bg-[#222222] rounded-md">Education</span>
                                <span class="px-3 py-1 bg-[#222222] rounded-md">Education</span>
                                <span class="px-3 py-1 bg-[#222222] rounded-md">6+</span>
                            </div>

                            <!-- Course Detail Button & Exp Reward -->
                            <div class="flex flex-col items-center justify-between gap-2 px-3 mt-2 mb-3 lg:flex-row">
                                <!-- EXP Reward -->
                                <div
                                    class="flex items-center gap-1 text-[0.875rem] md:text-[1rem] lg:text-[1.125rem] xl:text-[1.25rem] font-medium">
                                    <i class="ti ti-bolt-filled"></i>
                                    <span>200 EXP</span>
                                </div>
                                <!-- Core Reward -->
                                <div
                                    class="flex items-center gap-1 text-[0.875rem] md:text-[1rem] lg:text-[1.125rem] xl:text-[1.25rem] font-medium">
                                    <i class="ti ti-diamonds-filled"></i>
                                    <span>200 Core</span>
                                </div>
                                <!-- Button -->
                                <button
                                    class="px-4 py-2 text-[0.75rem] md:text-[0.875rem] lg:text-[1rem] xl:text-[1.125rem] font-semibold text-black bg-white rounded-md hover:bg-gray-200">
                                    View
                                </button>
                            </div>
                        </div>
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

        </div>
    </div>
</x-app-layout>


@include('pages.course.script')
@include('pages.course.modal')
