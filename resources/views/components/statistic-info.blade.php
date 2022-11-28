@props(['location', 'newCases', 'deaths', 'recovered'])
<div class="border-b border-b-custom-neutral-100 h-12 flex items-center">
    <div class="flex justify-between text-custom-black text-sm font-normal w-[638px] ml-10">
        <h2 class="min-w-[81px]">{{$location}}</h2>
        <p class="min-w-[97px]">{{$newCases}}</p>
        <p class="min-w-[70px]">{{$deaths}}</p>
        <p class="min-w-[96px]">{{$recovered}}</p>
    </div>
</div>
