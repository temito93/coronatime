@props(['title'])
@php
    $dashboard = app()->getLocale()."/dashboard";
    $byCountry = app()->getLocale()."/byCountry";
@endphp
<x-layout>
    <x-header />
    <main class="desktop:px-[108px] px-4">
        <div class="desktop:mt-10 mt-6">
            <h2 class="text-custom-black font-extrabold desktop:text-[25px] text-xl">{{$title}}</h2>
            <div class="desktop:mt-10 mt-6 border-b pb-4 border-solid border-custom-neutral-100">
                <a href="{{route('dashboard')}}" class="desktop:text-base text-sm text-custom-black desktop:mr-[72px] mr-6  {{request()->is($dashboard) ? 'border-b-[3px] border-custom-black font-bold' : 'border-none font-normal' }}   pb-4">{{__('admin.worldwide')}}</a>
                <a href="{{route('by.country')}}" class="pb-4 desktop:text-base text-sm  text-custom-black {{request()->is($byCountry) || request()->is($byCountry."/*") ? 'border-b-[3px] border-custom-black font-bold' : 'border-none font-normal' }}">{{__('admin.by.country')}}</a>
            </div>
        </div>
        {{ $slot }}
    </main>
</x-layout>
