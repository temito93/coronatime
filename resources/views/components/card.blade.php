<div class="desktop:ml-[108px] ml-4">
   <div class="flex desktop:justify-between">
        <div class="desktop:mt-11 mt-[25px] desktop:max-w-[392px] max-w-[343px] whitespace-nowrap">
            <div class="flex desktop:justify-between">
                <x-svg.logo class="desktop:mr-0  mr-16"/>
                <x-dropdown />
            </div>
            {{$slot}}
        </div>
        <div class="hidden desktop:flex">
            <img src="{{asset('assets/images/corona.png')}}" alt="" class="h-screen">
        </div>
   </div>
</div>
