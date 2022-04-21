<div>
    <div x-data="helpers">
        <div class="flex justify-center">
            <h1 class="mt-5 mb-24 text-2xl font-bold border-b-2 border-gray-600">Gestor de Archivos Multimedia - Blade</h1>
        </div>

        <div class="flex justify-end p-5">
            <x-button-link
                x-on:click="toggleFormNewReg(['Cerrar', 'Crear'])">
                <span x-text="textButton"></span>
            </x-button-link>
        </div>
        <div x-cloak x-show="open">
            <x-files.create-file trigger="open"></x-files.create-file>
        </div>

        <div class="p-5">
            <x-gam-table :files="$files"></x-gam-table>
        </div>
    </div>
</div>
