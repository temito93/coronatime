<x-dashboard-container>
    <section class="mt-10">
        <h2 class="text-custom-black font-extrabold text-[25px]">Worldwide Statistics</h2>
        <div class="mt-10 border-b pb-4 border-solid border-custom-neutral-100">
            <a href="" class="text-base font-bold text-custom-black mr-[72px] border-b-[3px] border-custom-black pb-4">Worldwide</a>
            <a href="" class="pb-4 text-base font-normal text-custom-black">By country</a>
        </div>

       <div class="mt-10 flex justify-between">
            <x-new-cases value={{$newCases}} />
            <x-recovered value={{$recovered}} />
            <x-death value={{$deaths}}/>
       </div>
    </section>
</x-dashboard-container>
