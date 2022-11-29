<header class="h-20 border-b border-custom-neutral-100 border-solid">
    <div class="desktop:px-[108px] px-4 py-5 flex desktop:justify-between items-center">
        {{-- Logo  --}}
        <div class="desktop:flex hidden">
            <x-svg.admin-logo />
        </div>

        <div class="desktop:hidden flex">
            <x-svg.logo />
        </div>

        {{-- Navigation  --}}
        <div class="flex items-center h-8">
            <div class="ml-14">
                <x-dropdown/>
            </div>
            {{-- Mobile  --}}
           <div class="ml-[42px] desktop:hidden flex">
                <x-settings />
           </div>

            {{-- Desktop  --}}
            <div class="desktop:flex desktop:items-center  hidden">
                <div class="flex ml-12">
                    <h2 class="text-custom-black font-bold text-base">{{ucwords(auth()->user()->username)}}</h2>
                </div>
                <div class="border-l h-8 ml-4 flex items-center  border-custom-neutral-200 ">
                    <form action="{{route('logout')}}" method="POST" class="mb-0">
                        @csrf
                        <x-form.button class="ml-4 text-custom-black font-medium text-sm">{{__('admin.logout')}}</x-form.button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
