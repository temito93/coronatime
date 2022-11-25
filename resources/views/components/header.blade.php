<header class="h-20 border-b border-custom-neutral-100">
    <div class="px-[108px] py-5 flex justify-between items-center">
        {{-- Logo  --}}
        <div>
            <x-svg.admin-logo />
        </div>

        {{-- Navigation  --}}
        <div class="flex items-center h-8">
            <x-dropdown/>
            <div class=" flex ml-12">
                <h2 class="text-custom-black font-bold text-base">{{ucwords(auth()->user()->username)}}</h2>
            </div>
            <div class="border-l h-8 ml-4 flex items-center  border-custom-neutral-200 ">
                <form action="/{{app()->getLocale()}}/logout" method="POST">
                    @csrf
                    <x-form.button class="ml-4 text-custom-black font-medium text-sm">{{__('admin.logout')}}</x-form.button>
                </form>
            </div>
        </div>
    </div>
</header>
