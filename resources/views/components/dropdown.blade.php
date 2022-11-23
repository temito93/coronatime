@php
$thisUrl = url()->current().'';
$newUrlEn = str_replace('/ge/','/en/', $thisUrl);
$newUrlGe = str_replace('/en/', '/ge/', $thisUrl);
@endphp
<div x-data="{dropdownMenu: false}" class="relative w-20" x-on:click.outside="dropdownMenu = false">
    <!-- Dropdown toggle button -->
    <button
        @click="dropdownMenu = ! dropdownMenu"
        class="flex items-center p-2  rounded-md"
    >
        <span class="mr-2 text-base font-normal text-custom-black">{{ucwords(Config::get('app.locale') == 'en' ? 'english' : 'ქართული')}}</span>
        <x-svg.dropdown />
    </button>
    <!-- Dropdown list -->
    <div
        x-show="dropdownMenu"
        class="left-1 absolute bg-blue-700 right-0 py-2 mt-2 rounded-md shadow-xl w-full text-base"
    >
        <a
            href="{{$newUrlEn}}"
            class="block  pl-2 py-2 text-sm text-white  hover:bg-white hover:text-custom-black"
        >
            English
        </a>
        <a
            href="{{$newUrlGe}}"
            class="block  pl-2 py-2 text-sm text-white  hover:bg-white hover:text-custom-black"
        >
            ქართული
        </a>

    </div>
</div>
