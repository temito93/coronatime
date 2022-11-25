@props(['value'=> ''])

<div class="relative">
    <div class="bg-custom-yellow-400 rounded-2xl w-[392px] h-[255px] opacity-[0.08]">
    </div>
    <div class="absolute top-0 w-[392px] h-[255px] flex flex-col items-center">
        <img src="{{asset('assets/images/yellow.png')}}"  width="90" alt="" class="mt-[53px]">
        <p class="font-medium text-xl text-custom-black mt-6">Death</p>
        <p class="text-custom-yellow-400 font-black text-[39px] mt-4">{{$value}}</p>
    </div>
</div>
