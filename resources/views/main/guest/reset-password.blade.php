<x-layout>
    <div class="desktop:flex justify-center desktop:px-0 px-4">
        <div class="flex flex-col desktop:items-center">
            <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
            <div class="desktop:w-[392px] w-[343px] desktop:mt-[108px] mt-10">
                <form action="{{route('password.update', ['email' => $email, 'token' => $token, 'locale' => app()->getLocale()])}}" method="POST">
                @csrf
                <h2 class="desktop:mb-14 mb-10 text-center text-custom-black font-black desktop:text-[25px] text-xl">{{__('password.title')}} </h2>
                <div>
                    <x-form.input type="password" name="password" placeholder="{{__('password.password.placeholder')}}">{{__('password.password')}}</x-form.input>
                    <x-form.input type="password" name="confirm_password" placeholder="{{__('password.repeat.password')}}">{{__('password.repeat.password')}}</x-form.input>
                </div>
                    <x-form.button
                        class="desktop:mt-10 mt-[224px] bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center font-black"
                        >{{__('password.save')}} </x-form.button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
