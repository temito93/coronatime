<x-layout>
    <div class="flex desktop:justify-center desktop:px-0 px-4">
        <div class="flex flex-col desktop:items-center">
            <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
            <div class="desktop:w-[392px] desktop:mt-[108px] mt-10">
                <form action="{{route('password.reset.link', ['locale' => app()->getLocale()])}}" method="POST">
                    @csrf
                    <h2 class="desktop:mb-14 mb-10 text-center text-custom-black font-black desktop:text-[25px] text-xl">{{__('password.title')}}</h2>
                    <div>
                        <x-form.input name="email" placeholder="{{__('password.email.placeholder')}}" type="text" class="mb-0">{{__('password.email')}}</x-form.input>
                    </div>
                    <x-form.button
                        class="py-[19px] flex items-center justify-center  bg-custom-green-500 text-white desktop:mt-14 mt-[320px]  w-full rounded-lg hover:bg-green-700  font-black text-base"
                        >{{__('password.reset.button')}}
                    </x-form.button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
