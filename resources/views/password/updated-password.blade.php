<x-layout class="h-full min-h-full">
    <x-confirmation text='{{__("password.update.success")}}'>
        <div class="desktop:w-[392px] w-[343px] flex flex-col items-center">
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:mt-[94px] mt-[191px] desktop:py-[19px] py-[15px] bg-custom-green-500 text-white w-full rounded-lg font-black hover:bg-green-700 text-center desktop:text-base text-sm"
                >{{ __("password.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
