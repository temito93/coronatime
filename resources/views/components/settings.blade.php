<div x-data="{dropdownMenu: false}" class="relative" x-on:click.outside="dropdownMenu = false">
    <!-- Dropdown toggle button -->
    <button
        @click="dropdownMenu = ! dropdownMenu"
        class="flex items-center  rounded-md"
    >
        <img src="{{asset('assets/images/dropdown.png')}}" alt="dropdownIcon" class="w-[18px] h-[16px]">
    </button>
    <!-- Dropdown list -->
    <div
        x-show="dropdownMenu"
        class="-right-1/3 absolute bg-blue-700 py-2 mt-2 rounded-lg shadow-xl w-24 text-base h-24"
    >
        <div class="flex justify-center">
            <h2 class="text-white d text-base">{{ucwords(auth()->user()->username)}}</h2>
        </div>
        <div class="flex items-center justify-center">
            <form action="{{route('logout')}}" method="POST" class="mb-0 mt-4">
                @csrf
                <x-form.button class="text-white text-base  h-5">{{__('admin.logout')}}</x-form.button>
            </form>
        </div>

    </div>
</div>
