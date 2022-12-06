<x-layout class="h-full min-h-full">
    <div class="desktop:flex justify-center desktop:px-0 px-4 h-full min-h-full">
        <div class="flex flex-col desktop:items-center h-full">
            <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
            <div class="desktop:w-[392px]  desktop:mt-[108px] mt-10 h-full flex justify-center w-full">
                <form action="" method="POST" class="h-full  flex flex-col justify-end">
                @csrf
                <div>
                    <h2 class="desktop:mb-14 mb-10 text-center text-custom-black font-black desktop:text-[25px] text-xl">{{__('password.title')}} </h2>
                    <x-form.input type="password" name="password" placeholder="{{__('password.password.placeholder')}}">{{__('password.password')}}</x-form.input>
                    <x-form.input type="password" name="confirm_password" placeholder="{{__('password.repeat.password')}}">{{__('password.repeat.password')}}</x-form.input>
                </div>
                   <div class="h-full flex desktop:items-baseline items-end desktop:pb-0 pb-10">
                        <x-form.button
                        class="desktop:mt-10  bg-custom-green-500 text-white w-full rounded-lg hover:bg-green-700 text-center font-black"
                        >{{__('password.save')}} </x-form.button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
