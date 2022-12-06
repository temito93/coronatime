<x-dashboard-container title="{{__('admin.title.country')}}"/>
<section class="desktop:pb-14 pb-0  desktop:px-[108px]">
    <form class="desktop:w-[239px] max-w-[375px]  desktop:mt-10 mt-0" method="GET" action="{{route('search')}}">
        @csrf
        <div class="relative">
            <div class="absolute inset-y-0 flex items-center left-[25px] cursor-pointer">
                <x-form.button class="cursor-pointer">
                    <img src="{{asset('assets/images/search.png')}}" alt="">
                </x-form.button>
            </div>
                <input type="hidden" name="country" value="{{request('country')}}">
            <input type="text" name="search" class="block w-full desktop:py-4 py-[25px] pl-[60px] text-sm text-custom-black border-none  desktop:border-solid  desktop:border-custom-neutral-200 rounded-lg  focus:ring-blue-500 focus:border-blue-500 placeholder-custom-zinc" placeholder="{{__('admin.search.country')}}">
        </div>
    </form>
    <div class="desktop:mt-10 mt-0  bg-custom-neutral-100 desktop:rounded-r-lg desktop:rounded-l-lg rounded-b-none shadow-custom">
        <div class="desktop:ml-10 ml-1">
           <x-statistic-title />
        </div>
        <div class="grid grid-cols-1 desktop:max-h-[547px] max-h-[358px]  scrollbar-track-transparent scrollbar-thumb-custom-zinc scrollbar-thumb-rounded scrollbar-thin bg-white">

            @foreach(request('sort') || request('search') ? $statistics : $statistics::all() as $statistic)
                    <x-statistic-info location="{{app()->getLocale() == 'ge' ? $statistic->getTranslation('country', 'ka') : $statistic->getTranslation('country', 'en')}}" newCases="{{number_format($statistic->new_cases)}}" deaths="{{number_format($statistic->deaths)}}" recovered="{{number_format($statistic->recovered)}}" />
            @endforeach
        </div>
    </div>
</section>
