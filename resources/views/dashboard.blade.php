<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{-- <x-resources :files="$files"></x-resources> --}}
                {{-- o --}}
                {{-- SIN pasar parámetros adicionales --}}
                {{-- <livewire:resources /> --}}
                {{-- CON el paso de parámetros adicionales --}}
                <livewire:resources id="11" />
            </div>
        </div>
    </div>
</x-app-layout>
