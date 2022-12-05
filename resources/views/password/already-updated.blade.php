<x-layout>
    <x-confirmation>
        <div class="desktop:w-[392px] w-[343px] flex flex-col items-center">
            <p class="desktop:text-lg text-sm  font-normal text-custom-black mt-4 ">
                {{ __("password.already.updated") }}
            </p>
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:text-lg text-base  desktop:mt-[94px] mt-[191px]  desktop:py-[19px] py-4  bg-custom-green-500 text-white w-full rounded-lg font-black hover:bg-green-700 text-center"
                >{{ __("password.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
