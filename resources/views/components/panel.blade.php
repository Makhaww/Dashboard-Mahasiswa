<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-xl shadow-sm']) }}>
    @isset($header)
        <div class="px-5 py-4 border-b border-gray-200 flex items-center justify-between">
            <div>{{ $header }}</div>
            @isset($actions)
                <div>{{ $actions }}</div>
            @endisset
        </div>
    @endisset

    <div class="p-5">
        {{ $slot }}
    </div>
</div>