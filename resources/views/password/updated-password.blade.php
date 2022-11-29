<x-layout>
    <x-confirmation>
        <div class="desktop:w-[392px] w-[343px] flex flex-col desktop:items-center">
            <p
                class="desktop:text-lg text-base font-normal text-custom-black mt-4 desktop:whitespace-nowrap whitespace-normal text-center"
            >
                {{ __("password.update.success") }}
            </p>
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:mt-[94px] mt-[191px] desktop:py-[19px] py-[15px] bg-custom-green-500 text-white w-full rounded-lg font-black hover:bg-blue-400 text-center desktop:text-base text-sm"
                >{{ __("password.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
