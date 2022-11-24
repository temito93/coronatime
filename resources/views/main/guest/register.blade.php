<x-layout>
    <x-card>
        <h2 class="mt-14 font-black text-2xl">{{__('register.welcome')}}</h2>
        <p class="font-normal text-xl text-zinc-500 mt-4">
            {{__('register.welcome.details')}}
        </p>
        <form action="{{route('signup', ['locale' => app()->getLocale()])}}" class="mt-6" method="POST">
            @csrf
            <x-form.input
                class="mb-0"
                name="username"
                placeholder="{{__('register.username.placeholder')}}"
                >{{__('register.username')}}</x-form.input
            >
            <p class="whitespace-normal mt-2 mb-6 text-sm text-custom-zinc font-normal">{{__('register.username.warn')}}</p>
            <x-form.input
                name="email"
                placeholder="{{__('register.email.placeholder')}}"
                >{{__('register.email')}}</x-form.input
            >
            <x-form.input type='password' name="password" placeholder="{{__('register.password.placeholder')}}"
                >{{__('register.password')}}</x-form.input
            >
            <x-form.input type='password' name="confirm_password" placeholder="{{__('register.repeat.password')}}"
                >{{__('register.repeat.password')}}</x-form.input
            >
            <x-form.checkbox />
            <div class="mt-6">
                <x-form.button class="bg-custom-green-500 text-white w-full font-black  py-5 rounded-lg hover:bg-blue-400">{{__('register.sign.up')}}</x-form.button>
            </div>

            <div class="text-center mt-6">
                <p class="text-custom-zinc text-base font-normal">{{__('register.account')}} <a href="{{ route('login', ['locale' => app()->getLocale()]) }}" class="text-custom-black font-bold">{{__('register.log.in')}}</a></p>
            </div>
        </form>
    </x-card>
</x-layout>
