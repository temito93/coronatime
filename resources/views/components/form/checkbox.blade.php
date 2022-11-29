<div {{$attributes->
    merge(['class' => 'flex items-center justify-between desktop:w-[392px]'])}}}>
    <div>
        <input
            name="remember"
            type="checkbox"
            value="1"
            class="w-5 h-5 text-blue-600 rounded border border-custom-neutral-200 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
        />
        <label
            for="remember"
            class="ml-2 text-sm font-semibold text-custom-black"
        >
            {{ __("login.remember") }}
        </label>
    </div>
    {{ $slot }}
</div>
