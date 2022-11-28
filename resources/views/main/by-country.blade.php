<x-dashboard-container title="{{__('admin.title.country')}}">
    <section class="pb-14">
        <form class="w-[239px] mt-10">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0  flex items-center left-[25px] pointer-events-none">
                    <img src="{{asset('assets/images/search.png')}}" alt="">
                </div>
                <input type="search" class="block w-full py-4 pl-[60px] text-sm text-custom-black border border-custom-neutral-200 rounded-lg  focus:ring-blue-500 focus:border-blue-500 placeholder-custom-zinc" placeholder="Search by country">
            </div>
        </form>
        <div class="mt-10 bg-custom-neutral-100 rounded-r-lg rounded-l-lg rounded-b-none shadow-custom">
            <div class="ml-10">
               <x-statistic-title />
            </div>
            <div class="max-h-[547px] scrollbar-track-transparent scrollbar-thumb-custom-zinc scrollbar-thumb-rounded scrollbar-thin bg-white">
                <x-statistic-info location="Worldwide" newCases="9,704,000" deaths="66,591" recovered="5,803,905" />
                @foreach($statistics as $statistic)
                    <x-statistic-info location="{{$statistic->getTranslation('country', 'en')}}" newCases="{{number_format($statistic->new_cases)}}" deaths="{{number_format($statistic->deaths)}}" recovered="{{number_format($statistic->recovered)}}" />
                @endforeach
            </div>
        </div>
    </section>
</x-dashboard-container>
