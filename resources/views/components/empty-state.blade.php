@props(['title' => 'Belum ada data', 'description' => null, 'icon' => '📭'])

<div class="text-center py-10">
    <div class="text-4xl mb-3">{{ $icon }}</div>
    <h4 class="font-semibold text-gray-700">{{ $title }}</h4>
    @if ($description)
        <p class="text-sm text-gray-500 mt-1">{{ $description }}</p>
    @endif
</div>