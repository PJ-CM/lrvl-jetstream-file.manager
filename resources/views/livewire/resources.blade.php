<div>
    <div x-data="{
        open_res: @entangle('open'),
    }">
        {{-- <div x-data="helpers"> --}}
        <div x-data="helpers({ value: $wire.entangle('open') })">
            <div class="flex justify-center">
                <h1 class="mt-5 mb-24 text-2xl font-bold border-b-2 border-gray-600">Gestor de Archivos Multimedia - Blade
                </h1>
            </div>

            <div class="flex justify-end p-5">
                <x-button-link x-on:click="toggleFormNewReg(['Cerrar', 'Crear'])">
                    <span x-text="textButton"></span>
                </x-button-link>
            </div>
            <x-jet-modal wire:model="open">
                <x-files.create-file trigger="open_res" :mediaId="$mediaId"></x-files.create-file>
            </x-jet-modal>

            <div class="p-5">
                <x-gam-table :files="$files"></x-gam-table>
            </div>
        </div>
    </div>
</div>
