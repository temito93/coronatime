<x-layout>
    <x-confirmation>
        <div class="w-[392px] flex flex-col items-center">
            <p
                class="text-lg font-normal text-custom-black mt-4 whitespace-nowrap"
            >
                {{ __("email.confirmed.account") }}
            </p>
            <a
                href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                class="mt-[94px] py-[19px] bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center"
                >{{ __("email.sign.in") }}</a
            >
        </div>
    </x-confirmation>
</x-layout>
