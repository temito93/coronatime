@props(['name', 'placeholder' => '','type' => 'text', 'id' => ''])

<div {{$attributes->
    merge(['class' => "desktop:mb-6 mb-4"])}}>
    <label for="{{ $name }}" class="font-bold text-custom-black desktop:text-base text-sm">
        {{ $slot }}
    </label>

    <div class="mt-2 relative">
        <input
            class="w-full h-14 appearance-none rounded-[8px] border {{$errors->any() ? 'border-custom-red border-solid' : 'border-custom-neutral-200'  }}  border-custom-neutral-200 pl-6 py-[19px] placeholder-custom-zinc font-normal text-base"
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            {{$type != 'password' ? $attributes(['value' => old($name)]) : "" }}
        />
        <div class="absolute right-4 bottom-5 hidden">
            <img src="{{asset('assets/images/vector.png')}}" alt="image">
        </div>
    </div>
    @error($name)
        <div class="mt-2 flex">
            <img src="{{asset('assets/images/not-found.png')}}" alt="">
                <p class="text-red-500 text-sm ml-3">
                    {{ $message }}
                </p>
        </div>
    @enderror
</div>
