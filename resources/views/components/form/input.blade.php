@props(['name', 'placeholder' => '','type' => 'text', 'id' => ''])

<div {{$attributes->
    merge(['class' => "mb-6"])}}>
    <label for="{{ $name }}" class="font-bold text-custom-black text-[16px]">
        {{ $slot }}
    </label>

    <div class="mt-2 relative">
        <input
            class="w-full appearance-none  rounded-[8px] border  border-custom-neutral-200 pl-6 py-[19px] placeholder-custom-zinc font-normal text-base"
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            {{$attributes(['value' => old($name)])}}
        />
        <div class="absolute right-4 bottom-5 hidden">
            <img src="{{asset('assets/images/vector.png')}}" alt="">
        </div>
    </div>
    @error($name)
    <p class="text-red-500 text-sm mt-2">
        {{ $message }}
    </p>
    @enderror
</div>
