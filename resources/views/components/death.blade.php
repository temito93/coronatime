@props(['value'=> ''])

<div class="relative">
    <div class="bg-custom-yellow-400 rounded-2xl desktop:w-[392px] w-[164px] desktop:h-[255px] h-[193px] opacity-[0.08]">
    </div>
    <div class="absolute top-0 desktop:w-[392px] w-[164px] desktop:h-[255px] h-[193px] flex flex-col items-center">
        <img src="{{asset('assets/images/yellow.png')}}"  width="90" alt="" class="desktop:mt-14 mt-[31px] h-[33.66px]">
        <p class="font-medium desktop:text-xl text-base  text-custom-black desktop:mt-6 mt-4">{{__('admin.death')}}</p>
        <p class="text-custom-yellow-400 font-black desktop:text-[39px] text-[25px] desktop:mt-6 mt-4">{{$value}}</p>
    </div>
</div>
