<x-layout>
    <x-header />
    <main class="px-[108px]">
        <div class="mt-10">
            <h2 class="text-custom-black font-extrabold text-[25px]">{{__('admin.title.worldwide')}}</h2>
            <div class="mt-10 border-b pb-4 border-solid border-custom-neutral-100">
                <a href="/{{app()->getLocale()}}/dashboard" class="text-base font-bold text-custom-black mr-[72px] border-b-[3px] border-custom-black pb-4">{{__('admin.worldwide')}}</a>
                <a href="/{{app()->getLocale()}}/by_country" class="pb-4 text-base font-normal text-custom-black">{{__('admin.by.country')}}</a>
            </div>
        </div>
        {{ $slot }}
    </main>
</x-layout>
