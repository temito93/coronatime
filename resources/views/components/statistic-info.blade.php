@props(['location', 'newCases', 'deaths', 'recovered'])
<div class="border-b border-b-custom-neutral-100 h-12 flex items-center">
    <div class="flex  text-custom-black text-sm font-normal max-w-[638px] ml-10">
        <h2 class="min-w-[226px]">{{$location}}</h2>
        <p class="min-w-[239px]">{{$newCases}}</p>
        <p class="min-w-[215px]">{{$deaths}}</p>
        <p class="min-w-[96px]">{{$recovered}}</p>
    </div>
</div>
