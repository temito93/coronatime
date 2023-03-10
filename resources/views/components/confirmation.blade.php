@props(['text'])

<div class="h-full min-h-full pb-10 px-4">
    <div class="h-full min-h-full flex flex-col desktop:items-center justify-center">
        <x-svg.logo class="desktop:mt-10 mt-[25px]"/>
        <div class="desktop:mt-[248px] mt-52 flex items-center flex-col text-center">
            <x-confirm />
            <p class="desktop:text-lg text-sm  font-normal text-custom-black mt-4">
                {{ $text }}
            </p>
        </div>
        <div class="h-full flex items-end desktop:items-baseline justify-center">
            {{$slot}}
        </div>
    </div>
</div>
