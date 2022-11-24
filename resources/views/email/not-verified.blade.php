<x-layout class="flex justify-center h-full items-center">
    <div class="flex justify-center">
        <div class="flex flex-col items-center">
            <x-svg.logo class="mt-10"/>
            <div>
                <div class="w-[392px] flex flex-col items-center">
                    <p class="text-lg font-normal text-custom-black mt-10 whitespace-nowrap">
                        {{ __("email.not.verified") }}
                    </p>
                    <a
                        href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                        class="mt-[94px] py-[19px] bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center"
                        >{{ __("email.sign.in") }}</a
                    >
                </div>
            </div>
        </div>
    </div>

</x-layout>
