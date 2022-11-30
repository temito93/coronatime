<x-layout class="flex desktop:justify-center h-full desktop:items-center desktop:px-0  px-4">
    <div>
        <div class="flex flex-col desktop:items-center">
            <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
            <div>
                <div class="desktop:w-[392px] w-[343px]  flex flex-col items-center">
                    <p class="desktop:text-lg text-xl  font-normal text-custom-black desktop:mt-10 mt-[211px]  desktop:whitespace-nowrap whitespace-normal text-center">
                        {{ __("email.not.verified") }}
                    </p>
                    <a
                        href="{{ route('login', ['locale' => app()->getLocale()]) }}"
                        class="desktop:mt-[94px] mt-[230px] desktop:text-base text-sm font-black  desktop:py-[19px] py-[15px]  bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center"
                        >{{ __("email.sign.in") }}</a
                    >
                </div>
            </div>
        </div>
    </div>

</x-layout>
