<header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between">
    <div class="flex items-center gap-4">
        <span class="text-lg font-bold text-blue-600">Makhaww</span>
        <span class="text-gray-400">|</span>
        <span class="text-gray-700 font-medium">@yield('title')</span>
    </div>
    <div class="text-sm text-gray-600">
        Halo, <span class="font-semibold">{{ $admin ?? 'Administrator' }}</span>
    </div>
</header>