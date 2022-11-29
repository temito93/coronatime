@props(['location', 'newCases', 'deaths', 'recovered'])
<div class="border-b border-b-custom-neutral-100 h-12 grid items-center">
    <div class="grid grid-cols-4 text-custom-black text-sm font-normal max-w-[770px] ml-10">
        <h2>{{$location}}</h2>
        <p>{{$newCases}}</p>
        <p>{{$deaths}}</p>
        <p>{{$recovered}}</p>
    </div>
</div>
