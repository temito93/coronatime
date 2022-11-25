@props(['value'=> ''])
<div class="relative">
    <div class="bg-custom-green-500 rounded-2xl w-[392px] h-[255px] opacity-[0.08]">
    </div>
    <div class="absolute top-0 w-[392px] h-[255px] flex flex-col items-center">
        <img src="{{asset('assets/images/green.png')}}"  width="90" alt="" class="mt-14">
        <p class="font-medium text-xl text-custom-black mt-6">{{__('admin.recovered')}}</p>
        <p class="text-custom-green-500 font-black text-[39px] mt-6">{{$value}}</p>
    </div>
</div>
