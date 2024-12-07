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

            {{-- <div class="flex justify-between">
                <!-- Filter -->
                <div class="flex gap-6">
                    <!-- Filter Button -->
                    <button class="flex items-center justify-center space-x-2">
                        <i class="text-xl text-white transition ti ti-filter-plus"></i>
                        <span class="text-white text-md">Add Category</span>
                    </button>
                    <!-- Filter Button -->

                    <!-- Reset Category-->
                    <button class="flex items-center justify-center">
                        <span class="text-white text-md">Reset</span>
                    </button>
                    <!-- Reset Category -->

                    <!-- Category Filter List -->
                    <div class="flex items-center justify-center gap-3 overflow-x-auto overflow-y-auto whitespace-nowrap max-w-[40%]">
                        <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
                            <span class="text-sm text-white">Dummy Category</span>
                            <button class="text-sm text-white hover:text-red-500">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>

                        @for ($i = 1; $i <= 18; $i++)
                        <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
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
                <div class="flex ">
                    <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
                        <button class="text-lg text-white">
                            <i class="ti ti-sort-descending"></i>
                        </button>
                        <span class="text-lg text-white">Popular</span>
                    </div>
                </div>
                <!-- Shortby -->
            </div> --}}

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
                    <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
                        <span class="text-sm text-white">Dummy Category</span>
                        <button class="text-sm text-white hover:text-red-500">
                        <i class="ti ti-x"></i>
                        </button>
                    </div>

                    @for ($i = 1; $i <= 18; $i++)
                        <div class="flex items-center justify-between gap-2 px-2 border border-white rounded-sm">
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


            <!-- Tab Content -->
            <div class="text-black ">
                <!-- Home Tab -->
                <div x-show="activeTab === 'home'" class="p-4 border rounded bg-gray-50">
                    <h2 class="text-lg font-semibold">Home</h2>
                    <p>Welcome to the Home tab. Here you can see the latest updates and news.</p>
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
