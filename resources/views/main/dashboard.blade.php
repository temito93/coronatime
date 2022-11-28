<x-dashboard-container title="{{__('admin.title.worldwide')}}">
    <section class="mt-10">
       <div class="mt-10 flex justify-between">
            <x-new-cases value={{$newCases}} />
            <x-recovered value={{$recovered}} />
            <x-death value={{$deaths}}/>
       </div>
    </section>
</x-dashboard-container>
