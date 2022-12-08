
<x-dashboard-container title="{{__('admin.title.worldwide')}}">
    <section>
       <div class="desktop:mt-10 mt-6 grid desktop:grid-cols-3 grid-cols-6 gap-y-4 w-full gap-x-4">
            <div class="desktop:col-span-1 col-span-6">
                <x-new-cases value="{{number_format($newCases)  }}" />
            </div>
            <div class="desktop:col-span-1 col-span-3">
                <x-recovered value="{{number_format($recovered)}}" />
            </div>
            <div class="desktop:col-span-1 col-span-3">
                <x-death value="{{number_format($deaths)}}" />
            </div>
       </div>
    </section>
</x-dashboard-container>
