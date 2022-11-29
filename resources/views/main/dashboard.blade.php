<x-dashboard-container title="{{__('admin.title.worldwide')}}">
    <section>
       <div class="desktop:mt-10 mt-6 desktop:flex desktop:justify-between grid grid-cols-2 desktop:w-full w-[343px] gap-y-4">
            <div class="col-span-4">
                <x-new-cases value="{{!is_null($newCases) ? $newCases : '' }}" />
            </div>
            <div class="col-span-2">
                <x-recovered value="{{!is_null($recovered) ? $recovered : ''}}" />
            </div>
            <div class="col-span-2">
                <x-death value="{{!is_null($deaths) ? $deaths : ''}}" />
            </div>
       </div>
       @if(!$statistics->count())
            <div class="flex justify-center text-3xl">
                <h2>{{__('admin.not.found')}}</h2>
            </div>
       @endif
    </section>
</x-dashboard-container>
