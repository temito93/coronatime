<div class="grid grid-cols-4 grid-row-1  h-14 items-center desktop:max-w-[770px] max-w-[375px] ">
    <div>
        <a href="{{route('sort', ['locale' => app()->getLocale(), 'sort' => 'country', 'by' => request('by') == 'desc' ? 'asc' : 'desc'])}}" class="flex items-center">
            <h2 class="font-semibold text-sm  text-custom-black break-all">{{__('admin.location')}}</h2>
            <div class="ml-2">
                <x-arrow-filter class="{{request()->sort == 'country' & request()->by == 'asc' ? 'border-custom-black' : ''}}"/>
                <x-arrow-filter class="rotate-180 mt-[3px] {{request()->sort == 'country' & request()->by == 'desc' ? 'border-custom-black' : ''}}" />
            </div>
        </a>
    </div>
    <div >
        <a href="{{route('sort', ['locale' => app()->getLocale(), 'sort' => 'new_cases', 'by' => request('by') == 'desc' ? 'asc' : 'desc'])}}" class="flex items-center">
            <h2 class="font-semibold text-sm   text-custom-black break-all">{{__('admin.new.cases')}}</h2>
            <div class="ml-2">
                <x-arrow-filter class="{{request()->sort == 'new_cases' & request()->by == 'asc' ? 'border-custom-black' : ''}}"/>
                <x-arrow-filter class="rotate-180 mt-[3px] {{request()->sort == 'new_cases' & request()->by == 'desc' ? 'border-custom-black' : ''}}" />
            </div>
        </a>
    </div>
    <div >
        <a href="{{route('sort', ['locale' => app()->getLocale(), 'sort' => 'deaths', 'by' => request('by') == 'desc' ? 'asc' : 'desc'])}}" class="flex items-center">
            <h2 class="font-semibold text-sm text-custom-black break-all">{{__('admin.deaths')}}</h2>
            <div class="ml-2">
                <x-arrow-filter class="{{request()->sort == 'deaths' & request()->by == 'asc' ? 'border-custom-black' : ''}}"/>
                <x-arrow-filter class="rotate-180 mt-[3px] {{request()->sort == 'deaths' & request()->by == 'desc' ? 'border-custom-black' : ''}}" />
            </div>
        </a>
    </div>
    <div >
        <a href="{{route('sort', ['locale' => app()->getLocale(), 'sort' => 'recovered', 'by' => request('by') == 'desc' ? 'asc' : 'desc'])}}" class="flex items-center">
            <h2 class="font-semibold text-sm text-custom-black break-all">{{__('admin.recovered')}}</h2>
            <div class="ml-2">
                <x-arrow-filter class="{{request()->sort == 'recovered' & request()->by == 'asc' ? 'border-custom-black' : ''}}"/>
                <x-arrow-filter class="rotate-180 mt-[3px] {{request()->sort == 'recovered' & request()->by == 'desc' ? 'border-custom-black' : ''}}" />
            </div>
        </a>
    </div>

</div>
