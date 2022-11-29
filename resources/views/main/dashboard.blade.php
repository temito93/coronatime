<x-dashboard-container title="{{__('admin.title.worldwide')}}">
    <section class="mt-10">
       <div class="mt-10 flex justify-between">
            <x-new-cases value="{{!is_null($newCases) ? $newCases : '' }}" />
            <x-recovered value="{{!is_null($recovered) ? $recovered : ''}}"  />
            <x-death value="{{!is_null($deaths) ? $deaths : ''}}" />
       </div>
       @if(!$statistics->count())
            <div class="flex justify-center text-3xl">
                <h2>{{__('admin.not.found')}}</h2>
            </div>
       @endif
    </section>
</x-dashboard-container>
