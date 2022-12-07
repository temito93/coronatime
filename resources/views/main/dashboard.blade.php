<x-dashboard-container title="{{__('admin.title.worldwide')}}">
    <section>
       <div class="desktop:mt-10 mt-6 desktop:flex desktop:justify-between grid grid-cols-2 desktop:w-full w-[343px] gap-y-4">
            <div class="col-span-4">
                <x-new-cases value="{{number_format($statistics::sum('new_cases'))  }}" />
            </div>
            <div class="col-span-2">
                <x-recovered value="{{number_format($statistics::sum('recovered'))}}" />
            </div>
            <div class="col-span-2">
                <x-death value="{{number_format($statistics::sum('deaths'))}}" />
            </div>
       </div>
    </section>
</x-dashboard-container>
