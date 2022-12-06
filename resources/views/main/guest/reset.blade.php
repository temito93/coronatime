<x-layout class="h-full min-h-full">
    <div class="h-full min-h-full flex justify-center desktop:px-0 px-4 pb-10">
        <div class="flex flex-col desktop:items-center">
            <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
            <div class="desktop:w-[392px] desktop:mt-[108px] mt-10 h-full">
                <form action="{{route('password.reset.link', ['locale' => app()->getLocale()])}}" method="POST" class="h-full  flex flex-col justify-end">
                    @csrf
                    <div>
                        <h2 class="desktop:mb-14 mb-10 text-center text-custom-black font-black desktop:text-[25px] text-xl">{{__('password.title')}}</h2>
                        <x-form.input name="email" placeholder="{{__('password.email.placeholder')}}" type="text" class="mb-0">{{__('password.email')}}</x-form.input>
                    </div>
                 <div class="h-full flex desktop:items-baseline items-end">
                    <x-form.button
                    class="py-[19px] flex items-center justify-center  bg-custom-green-500 text-white desktop:mt-14  w-full rounded-lg hover:bg-green-700  font-black text-base"
                    >{{__('password.reset.button')}}
                    </x-form.button>
                 </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
