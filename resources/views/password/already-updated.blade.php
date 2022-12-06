<x-layout class="h-full min-h-full">
    <x-confirmation text='{{__("password.already.updated")}}'>
        <div class="desktop:w-[392px] w-[343px] flex flex-col desktop:items-center ">
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:text-lg text-base  desktop:mt-[94px]   desktop:py-[19px] py-4  bg-custom-green-500 text-white w-full rounded-lg font-black hover:bg-green-700 text-center"
                >{{ __("password.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
