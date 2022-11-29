<x-layout>
    <x-confirmation>
        <div class="desktop:w-[392px] w-[343px]  flex flex-col items-center">
            <p class="desktop:text-lg text-base font-normal text-custom-black mt-4">
                {{ __("email.already.verified") }}
            </p>
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:mt-[94px] mt-[191px] font-black desktop:text-base text-sm  desktop:py-[19px] py-[15px]  bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center"
                >{{ __("email.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
