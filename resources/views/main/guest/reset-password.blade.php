<x-layout>
    <div class="flex justify-center">
        <div class="flex flex-col items-center">
            <x-svg.logo class="mt-10"/>
            <div class="w-[392px] mt-[108px]">
                <form action="{{route('password.update', ['email' => $email, 'token' => $token, 'locale' => app()->getLocale()])}}" method="POST">
                @csrf
                <h2 class="mb-14 text-center text-custom-black font-black text-[25px]">{{__('password.title')}} </h2>
                <div>
                    <x-form.input type="password" name="password" placeholder="{{__('password.password.placeholder')}}">{{__('password.password')}}</x-form.input>
                    <x-form.input type="password" name="confirm_password" placeholder="{{__('password.repeat.password')}}">{{__('password.repeat.password')}}</x-form.input>
                </div>
                    <x-form.button
                        class="py-[19px] bg-custom-green-500 text-white w-full rounded-lg hover:bg-blue-400 text-center font-black text-base"
                        >{{__('password.save')}} </x-form.button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
