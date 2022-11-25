<x-layout>
    <x-card>
        <h2 class="mt-14 font-black text-2xl">
            {{ __("login.welcome.back") }}
        </h2>
        <p class="font-normal text-xl text-zinc-500 mt-4">
            {{ __("login.welcome.back.details") }}
        </p>
        <form
            action="{{ route('authenticate', ['locale' => app()->getLocale()] ) }}"
            method="POST"
            class="mt-6"
        >
            @csrf
            <x-form.input
                name="login"
                placeholder="{{ __('login.username.placeholder') }}"
                >{{ __("login.username") }}</x-form.input
            >
            <x-form.input
                name="password"
                placeholder="{{ __('login.password.placeholder') }}"
                type="password"
                >{{ __("login.password") }}
            </x-form.input>

            <x-form.checkbox>
                <a
                    class="text-custom-blue-700 font-semibold text-sm"
                    href="{{ route('view.reset', ['locale' => app()->getLocale()]) }}"
                >
                    {{ __("login.forgot.password") }}</a
                >
            </x-form.checkbox>

            @if ($errors->any())
                <div class="mt-5 flex">
                    <img src="{{asset('assets/images/not-found.png')}}" alt="">
                        <p class="text-red-500 text-sm ml-3">
                            {{ __("login.login.error") }}
                        </p>
                </div>
            @endif

            <div class="mt-6">
                <x-form.button
                    class="bg-custom-green-500 text-white font-black w-full py-5 rounded-lg hover:bg-blue-400"
                    >{{ __("login.login") }}</x-form.button
                >
            </div>

            <div class="text-center mt-6">
                <p class="text-custom-zinc text-base font-normal">
                    {{ __("login.no.account") }}
                    <a
                        href="{{ route('view.signup', ['locale' => app()->getLocale()]) }}"
                        class="text-custom-black font-bold"
                    >
                        {{ __("login.sign.free") }}</a
                    >
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
