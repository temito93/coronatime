@props(['value'=> ''])
<div class="relative">
    <div class="bg-custom-blue-700 rounded-2xl desktop:w-[392px] w-[343px]  desktop:h-[255px] h-[193px]  opacity-[0.08]">
    </div>
    <div class="absolute top-0 desktop:w-[392px] w-[343px] desktop:h-[255px] h-[193px]  flex flex-col items-center">
        <img src="{{asset('assets/images/blue.png')}}"  width="90" alt="image" class="desktop:mt-10 mt-6 h-[47.5px]">
        <p class="font-medium desktop:text-xl text-base text-custom-black desktop:mt-6 mt-4">{{__('admin.new.cases')}}</p>
        <p class="text-custom-blue-700 font-black desktop:text-[39px] text-[25px] mt-4">{{$value}}</p>
    </div>
</div>
