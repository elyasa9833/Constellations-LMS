<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Include Tailwind --}}
    @include('scaffold.head')

    {{-- Include Font --}}
    @include('scaffold.font.IBM_Plex_Sans')

</head>

<body class="ibm-plex-sans-regular antialiased">
    <div class="fixed top-0 bottom-0 max-w-max p-[2.5vw] bg-black overflow-hidden flex flex-col gap-2">
        {{-- <div class="bg-gradient-to-r from-[#FFFFFF3D] to-[#9999993D] p-7 rounded-md"></div> --}}

        <div class="rounded-md p-px bg-gradient-to-r from-[#FFFFFF3D]/[24%] to-[#9999993D]/[24%]">
            <div class="bg-[#fff]/[10%] px-4 py-2 rounded-[calc(0.4rem-1px)]">
                <h1>1</h1>
            </div>
        </div>
        {{-- <div class="rounded-md p-px bg-gradient-to-r from-[#FFFFFF3D]/[24%] to-[#9999993D]/[24%]">
            <div class="bg-[#fff]/[10%] px-4 py-2 rounded-[calc(0.4rem-1px)]">
                <h1>2</h1>
            </div>
        </div>
        <div class="rounded-md p-px bg-gradient-to-r from-[#FFFFFF3D]/[24%] to-[#9999993D]/[24%]">
            <div class="bg-[#fff]/[10%] px-4 py-2 rounded-[calc(0.4rem-1px)]">
                <h1>3</h1>
            </div>
        </div> --}}

        {{-- <div class="p-7 bg-gray-300 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-100"></div> --}}
        {{-- <div class="bg-gradient-to-r from-[#FFFFFF3D] to-[#9999993D] p-7 rounded-md"></div> --}}

    </div>
</body>

</html>
