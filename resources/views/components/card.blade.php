<div class=" ml-[108px]">
   <div class="flex justify-between">
        <div class="mt-11 max-w-[392px] whitespace-nowrap">
            <x-svg.logo />
            {{$slot}}
        </div>
        <div class="mt-11">
            <x-dropdown />
        </div>
        <div>
            <img src="{{asset('assets/images/corona.png')}}" alt="" class="h-screen">
        </div>
   </div>
</div>
