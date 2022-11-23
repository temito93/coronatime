@props(['name', 'placeholder' => '','type' => 'text', 'value'=> ''])

<div {{$attributes->
    merge(['class' => "mb-6"])}}>
    <label for="{{ $name }}" class="font-bold text-custom-black text-[16px]">
        {{ $slot }}
    </label>

    <div class="mt-2">
        <input
            class="w-full appearance-none rounded-[8px] border border-custom-neutral-200 pl-6 py-[19px] placeholder-custom-zinc font-normal text-base"
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
        />
    </div>
    @error($name)
    <p class="text-red-500 text-sm mt-2">
        {{ $message }}
    </p>
    @enderror
</div>
