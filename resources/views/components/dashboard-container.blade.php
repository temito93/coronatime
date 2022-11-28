@props(['title'])
@php
    $dashboard = app()->getLocale()."/dashboard";
    $byCountry = app()->getLocale()."/by_country";
@endphp
<x-layout>
    <x-header />
    <main class="px-[108px]">
        <div class="mt-10">
            <h2 class="text-custom-black font-extrabold text-[25px]">{{$title}}</h2>
            <div class="mt-10 border-b pb-4 border-solid border-custom-neutral-100">
                <a href="{{route('dashboard')}}" class="text-base text-custom-black mr-[72px] {{request()->is($dashboard) ? 'border-b-[3px] border-custom-black font-bold' : 'border-none font-normal' }}   pb-4">{{__('admin.worldwide')}}</a>
                <a href="{{route('by.country')}}" class="pb-4 text-base text-custom-black {{request()->is($byCountry) ? 'border-b-[3px] border-custom-black font-bold' : 'border-none font-normal' }}">{{__('admin.by.country')}}</a>
            </div>
        </div>
        {{ $slot }}
    </main>
</x-layout>
