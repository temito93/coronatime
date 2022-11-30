<x-layout>
    <x-confirmation>
        <div class="desktop:w-[392px] w-[343px]  flex flex-col items-center">
            <p
                class="desktop:text-lg text-base font-normal text-custom-black mt-4 whitespace-nowrap"
            >
                {{ __("email.confirmed.account") }}
            </p>
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="desktop:mt-[94px] mt-[191px]  desktop:py-[19px] py-[15px] desktop:text-base text-sm  font-bold  bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center"
                >{{ __("email.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
