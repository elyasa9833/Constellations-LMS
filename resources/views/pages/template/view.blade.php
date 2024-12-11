<x-app-layout title="template">
    <div class="w-full max-w-[1700px] overflow-hidden">
        <div class="h-full overflow-y-auto">
            <div class="grid flex-1 grid-cols-10 gap-4 bg-[#191919] p-4">
                <!-- Loop grid item for testing grid-->
                <div class="flex items-center justify-center h-24 col-span-10 rounded-md shadow-md bg-slate-400">1</div>
                <div class="flex items-center justify-center h-24 col-span-7 bg-red-400 rounded-md shadow-md">2</div>
                <div class="flex items-center justify-center h-24 col-span-3 bg-yellow-400 rounded-md shadow-md">3</div>
                <div class="flex items-center justify-center h-24 col-span-7 bg-green-400 rounded-md shadow-md">2</div>
                <div class="flex items-center justify-center h-24 col-span-3 bg-blue-400 rounded-md shadow-md">3</div>
                @foreach (range(1, 20) as $number)
                <!-- Grid Items -->
                <div class="flex items-center justify-center h-24 rounded-md shadow-md bg-slate-400">1</div>
                <div class="flex items-center justify-center h-24 bg-red-400 rounded-md shadow-md">2</div>
                <div class="flex items-center justify-center h-24 bg-yellow-400 rounded-md shadow-md">3</div>
                <div class="flex items-center justify-center h-24 bg-green-400 rounded-md shadow-md">4</div>
                <div class="flex items-center justify-center h-24 bg-blue-400 rounded-md shadow-md">5</div>
                <div class="flex items-center justify-center h-24 bg-purple-400 rounded-md shadow-md">6</div>
                <div class="flex items-center justify-center h-24 bg-pink-400 rounded-md shadow-md">7</div>
                <div class="flex items-center justify-center h-24 bg-indigo-400 rounded-md shadow-md">8</div>
                <div class="flex items-center justify-center h-24 bg-gray-400 rounded-md shadow-md">9</div>
                <div class="flex items-center justify-center h-24 bg-teal-400 rounded-md shadow-md">10</div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

@include('pages.template.script')
@include('pages.template.modal')
