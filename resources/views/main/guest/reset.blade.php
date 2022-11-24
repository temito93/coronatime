<x-layout>
    <div class="flex justify-center">
        <div class="flex flex-col items-center">
            <x-svg.logo class="mt-10"/>
            <div class="w-[392px] mt-[108px]">
                <form action="{{route('password.reset.link', ['locale' => app()->getLocale()])}}" method="POST">
                    @csrf
                    <h2 class="mb-14 text-center text-custom-black font-black text-[25px]">{{__('password.title')}}</h2>
                    <div>
                        <x-form.input name="email" placeholder="{{__('password.email.placeholder')}}" type="email" class="mb-0">{{__('password.email')}}</x-form.input>
                    </div>
                    <x-form.button
                        class="py-[19px] bg-custom-green-500 text-white mt-14  w-full rounded-lg hover:bg-blue-400 text-center font-black text-base"
                        >{{__('password.reset.button')}}
                    </x-form.button>
                </form>
            </div>

        </div>
    </div>
</x-layout>
