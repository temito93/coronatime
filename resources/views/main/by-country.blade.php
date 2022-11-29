<x-dashboard-container title="{{__('admin.title.country')}}">
    <section class="pb-14">
        <form class="w-[239px] mt-10" method="GET" action="{{route('search')}}">
            @csrf
            <div class="relative">
                <div class="absolute inset-y-0 flex items-center left-[25px] cursor-pointer">
                    <x-form.button class="cursor-pointer">
                        <img src="{{asset('assets/images/search.png')}}" alt="">
                    </x-form.button>
                </div>
                    <input type="hidden" name="country" value="{{request('country')}}">
                <input type="text" name="search" class="block w-full py-4 pl-[60px] text-sm text-custom-black border border-custom-neutral-200 rounded-lg  focus:ring-blue-500 focus:border-blue-500 placeholder-custom-zinc" placeholder="Search by country">
            </div>
        </form>
        <div class="mt-10 bg-custom-neutral-100 rounded-r-lg rounded-l-lg rounded-b-none shadow-custom">
            <div class="ml-10">
               <x-statistic-title />
            </div>
            <div class="grid grid-cols-1 max-h-[547px] scrollbar-track-transparent scrollbar-thumb-custom-zinc scrollbar-thumb-rounded scrollbar-thin bg-white">

               @if($statistics->count())
                @if(!request('search'))
                    <x-statistic-info location="{{__('admin.worldwide')}}" newCases="{{ !is_null($newCases) ? $newCases : ''  }}" deaths="{{!is_null($deaths) ? $deaths : ''}}" recovered="{{!is_null($recovered) ? $recovered : ''}}" />
                @endif
                @foreach($statistics as $statistic)
                    <x-statistic-info location="{{app()->getLocale() == 'ge' ? $statistic->getTranslation('country', 'ka') : $statistic->getTranslation('country', 'en')}}" newCases="{{number_format($statistic->new_cases)}}" deaths="{{number_format($statistic->deaths)}}" recovered="{{number_format($statistic->recovered)}}" />
                @endforeach
               @endif
            </div>
        </div>
    </section>
</x-dashboard-container>
