<div class="flex justify-center">
    <div class="flex flex-col desktop:items-center">
        <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
        <div class="desktop:mt-[248px] mt-[211px] flex items-center justify-center ">
            <x-confirm />
        </div>
        <div>
            {{$slot}}
        </div>
    </div>
</div>
