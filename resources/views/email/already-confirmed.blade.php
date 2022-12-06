<x-layout class="h-full min-h-full">
    <x-confirmation text='{{ __("email.already.verified") }}'>
        <div class="desktop:w-[392px] w-[343px]  flex flex-col desktop:items-center">
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:mt-[94px] font-black desktop:text-base text-sm  desktop:py-[19px] py-[15px]  bg-custom-green-500 text-white w-full rounded-lg hover:bg-green-700 text-center"
                >{{ __("email.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
