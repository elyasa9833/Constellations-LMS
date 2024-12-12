<x-app-layout title="Course">

    <div x-data="{ ...scrollProgress(), showMenu: true }" class="relative w-full max-w-[1700px] flex mb-[6.4%] mt-3">

        <!-- Main Content -->
        <div :class="showMenu ? 'mr-[380px] pr-4' : 'mr-0 px-8'" class="flex-1 transition-all duration-300">

            <!--Content Scrollable-->
            <div class="h-full pb-[4%] overflow-y-auto pt-4  border-[#292929] border shadow-xl rounded-md p-6"
                x-ref="content" @scroll="updateProgress">
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
            <div class="relative flex w-full pt-5">
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
            <div class="absolute -left-6 top-4">
                <button @click="showMenu = !showMenu" class="bg-[#545454] text-white text-2xl shadow-lg py-2 pl-2 pr-4 flex items-center justify-center hover:bg-[#626262] hover:shadow-xl hover:scale-110 active:scale-95 transition duration-200 ease-in-out rounded-l-md">
                    <i :class="showMenu ? 'ti-chevrons-right' : 'ti-chevrons-right rotate-[540deg]'" class="transition-transform duration-1000 ti"></i>
                </button>
            </div>
            <div x-data="{ sideMenu: 'chapter' }" :class="showMenu ? 'opacity-100' : 'opacity-0'" class="w-full h-full border-[3px] border-[#383838] rounded-md shadow-xl overflow-hidden">
                <!--Side Menu Header-->
                <div class="w-full border-b-2 border-[#383838] relative">
                    <!-- Course Cover -->
                    <img class="object-cover w-full aspect-[16/9] rounded-t-md"
                        src="https://as1.ftcdn.net/v2/jpg/05/40/88/30/1000_F_540883010_iQNEDYQ48PEXiQd9oefyVDcEpWQN9Ahq.jpg" alt="">

                    <!-- Gradient and Text -->
                    <div class="absolute bottom-0 flex items-end w-full px-4 pb-[4px] h-1/2 bg-gradient-to-t from-black via-black/75 to-transparent">
                        <div class="flex-col w-full">
                            <div class="w-full pb-2">
                                <h2 class="text-xl text-white text-nowrap">Chapter  1</h2>
                            </div>
                            <div class="flex flex-col w-full">
                                <!-- Progress Bar -->
                                <div class="w-full h-1 bg-[#767676] rounded-lg">
                                    <div class="h-full bg-[#C0C0C0]" :style="{ width: scrollPercentage + '%' }"></div>
                                </div>
                                <!-- Progress Text -->
                                <div class="flex justify-between">
                                    <h2 class="text-xs text-white text-nowrap">Progress</h2>
                                    <h2 class="text-xs text-white text-nowrap" x-text="Math.round(scrollPercentage) + '%'"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Menu Tab -->
                <div class="w-full justify-evenly flex border-b-2 border-[#545454]">
                    <button @click="sideMenu = 'details'"
                        :class="{'border-b-4 text-[#ffffff] border-white ': sideMenu === 'details'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        Details
                    </button>
                    <button @click="sideMenu = 'chapter'"
                        :class="{'border-b-4 text-[#ffffff] border-white ': sideMenu === 'chapter'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        Chapter
                    </button>
                    <button @click="sideMenu = 'file'"
                        :class="{'border-b-4 text-[#ffffff] border-white ': sideMenu === 'file'}"
                        class="px-4 py-2 text-[#8c8c8c] hover:text-white/80 focus:outline-none -mb-[2px]">
                        File
                    </button>
                </div>

                <!-- Side Menu Tab Content -->
                <div class="h-full pb-[68%]">
                    <div x-show="sideMenu === 'details'" class="h-full px-2 pb-1 overflow-y-auto scrollbar-small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam esse praesentium ullam sint similique reprehenderit tempora placeat nulla nostrum incidunt quo accusantium, distinctio quae beatae suscipit error quas sunt libero mollitia assumenda asperiores voluptate iusto veniam iste. Pariatur assumenda quae veniam iste, numquam sit nostrum placeat modi exercitationem sed tempora unde, maxime eaque, tempore molestias dolore. Possimus libero quibusdam vero exercitationem labore incidunt illo sed facere, qui veritatis ipsum! Modi, accusamus culpa! Repellat ipsa mollitia perferendis odit nulla quis, fuga id porro, ad modi, itaque quibusdam? Dicta voluptas distinctio soluta voluptate maxime numquam neque laborum, impedit ipsa suscipit nemo voluptates dolorem qui? Officiis rerum ab magnam eos iusto velit ipsa cumque. Dicta, enim veniam mollitia earum sint ullam quaerat qui vitae aliquid natus blanditiis. Reiciendis provident id nulla, nihil itaque, eum animi delectus iusto ab exercitationem fugiat architecto aspernatur enim inventore fuga eius doloremque quod quas expedita quaerat sapiente! Aut labore perspiciatis, veniam inventore, eos iure consequatur sunt incidunt quisquam atque deserunt quas excepturi et provident? Natus quibusdam quod rerum aut delectus, facere consequatur dolore numquam cum reiciendis nam velit provident eligendi deserunt consectetur harum reprehenderit fugiat temporibus veniam? Ut veritatis iste impedit necessitatibus dignissimos, nisi quos harum eveniet earum vitae minus cumque quod ducimus sint quia, exercitationem illum debitis ipsam officia voluptatum expedita obcaecati veniam asperiores. Explicabo quia omnis cupiditate delectus eum quis sapiente eius repellendus, doloribus animi nobis. Error quibusdam facere vero maiores necessitatibus quisquam aspernatur provident ratione aliquam! Repellendus, dicta! Accusantium, et error cupiditate soluta rerum aliquid iusto repudiandae beatae a facilis architecto accusamus odit, impedit quod eius iure? Aperiam dolor facilis ab, quam assumenda natus eligendi tempore aliquam nulla nam. Repellendus sequi totam cum quo saepe, reiciendis natus suscipit porro? Minus officiis nostrum, ea nam maiores repudiandae blanditiis ad quaerat repellendus ut, doloremque numquam ducimus aperiam dolores dolor assumenda quibusdam nemo perspiciatis deserunt molestias fuga, accusantium atque recusandae. Eos quos minima fugiat aliquid voluptatem autem nulla, omnis recusandae harum tenetur obcaecati reiciendis eaque consectetur ipsam consequuntur molestiae quibusdam numquam aperiam! Alias hic accusamus sapiente laudantium neque officiis ab odio, ad temporibus cum eligendi ullam minima? Asperiores facilis amet vel exercitationem nobis quaerat magni at possimus, harum dolorem in dolore nulla, pariatur alias sapiente aut nisi officiis provident nostrum voluptates delectus! Quaerat exercitationem autem dolorum vel, earum magni quidem cum. Rem iure optio fugiat dolorum reprehenderit eum culpa nulla dolores voluptatem! Harum ullam aliquam aliquid voluptatem porro. Magni ad ducimus possimus numquam. Sunt laborum optio corrupti nihil, eius aliquam eveniet dicta at voluptas exercitationem? Fuga aliquam similique ipsam, illum perspiciatis ullam temporibus quaerat laboriosam error optio, porro odio recusandae? Impedit sunt labore inventore porro nulla tempora dolores molestiae ad facere, ducimus repellendus iure mollitia eaque dicta itaque reprehenderit aliquam quae aperiam veniam officia voluptatem. Mollitia vero omnis exercitationem culpa! Dolor odio veniam earum asperiores deleniti eos, doloribus itaque perspiciatis rerum sint dicta provident, corporis beatae, debitis inventore quod sunt ipsa libero autem nesciunt quia fugit illo fuga! Itaque, laboriosam sequi. Porro aliquam qui dolores facilis voluptatem ex.
                    </div>
                    <div x-show="sideMenu === 'chapter'" class="h-full px-2 pb-1 overflow-y-auto scrollbar-small">
                        <!-------------------------------------------->
                        <div x-data="{ open: null }" class="w-full max-w-xl pb-2 mx-auto mt-2 space-y-2">

                            <!-- Accordion Item 1 -->
                            {{-- <div class="border border-[#545454] rounded-md shadow-2xl">
                                <button @click="open === 1 ? open = null : open = 1" class="flex items-center justify-between w-full px-4 py-2 text-left">
                                    <span class="font-medium">01:Intro</span>
                                    <div class="flex items-center gap-2">
                                        <span class="text-md">0/10</span>
                                        <svg :class="open === 1 ? 'rotate-[540deg]' : ''"
                                            class="w-6 h-5 font-semibold transition-transform duration-500 border-2 border-white rounded-md"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div x-show="open === 1" x-collapse class="px-4 pb-2 space-y-2">
                                    <div class="flex items-center gap-2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="3" fill="#A1A1AA"></circle>
                                        </svg>
                                        <p class="text-md">Lorem Ipsum Dolor Sit Amet</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="3" fill="#A1A1AA"></circle>
                                        </svg>
                                        <p class="text-md">Lorem Ipsum Dolor Sit Amet</p>
                                    </div>
                                </div>
                            </div> --}}

                            @for ($i = 1; $i < 20; $i++)
                                <div class="border border-[#545454] rounded-md shadow-2xl">
                                    <button @click="open === {{$i}} ? open = null : open = {{$i}}" class="flex items-center justify-between w-full px-4 py-2 text-left">
                                        <span class="font-medium">{{$i}}: Example Chapter {{$i}}</span>
                                        <div class="flex items-center gap-2">
                                            <span class="text-md">0/10</span>
                                            <svg :class="open === {{$i}} ? 'rotate-[540deg]' : ''"
                                                class="w-6 h-5 font-semibold transition-transform duration-500 border border-white rounded-md"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div x-show="open === {{$i}}" x-collapse class="px-4 pb-2 space-y-2">
                                        <div class="flex items-center gap-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8" cy="8" r="3" fill="#A1A1AA"></circle>
                                            </svg>
                                            <p class="text-md">Lorem Ipsum Dolor Sit Amet</p>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8" cy="8" r="3" fill="#A1A1AA"></circle>
                                            </svg>
                                            <p class="text-md">Lorem Ipsum Dolor Sit Amet</p>
                                        </div>
                                    </div>
                                </div>
                            @endfor



                        </div>
                        <!-------------------------------------------->
                    </div>
                    <div x-show="sideMenu === 'file'" class="h-full px-2 pb-1 overflow-y-auto scrollbar-small">
                        @for ($i = 0; $i < 100; $i++)
                            <p>{{$i}}</p>
                        @endfor
                    </div>
                </div>

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
    <script>
        function scrollProgress() {
            return {
                scrollPercentage: 0,
                updateProgress() {
                    const content = this.$refs.content;
                    const scrollTop = content.scrollTop;
                    const scrollHeight = content.scrollHeight - content.clientHeight;
                    this.scrollPercentage = (scrollTop / scrollHeight) * 100;
                },
            };
        }
    </script>


</x-app-layout>

@include('pages.course_chapter.script')
@include('pages.course_chapter.modal')
