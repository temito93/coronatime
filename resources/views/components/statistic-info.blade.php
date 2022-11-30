@props(['location', 'newCases', 'deaths', 'recovered'])
<div class="border-b border-b-custom-neutral-100 h-12 grid items-center">
    <div class="grid grid-cols-4 text-custom-black text-sm font-normal desktop:max-w-[770px] max-w-[375px] desktop:ml-10 ml-1">
        <h2 class="break-all">{{$location}}</h2>
        <p class="break-all">{{$newCases}}</p>
        <p class="break-all">{{$deaths}}</p>
        <p class="break-all">{{$recovered}}</p>
    </div>
</div>
