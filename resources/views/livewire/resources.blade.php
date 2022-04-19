<div>
    <div x-data="helpers">
        <div class="flex justify-end p-5">
            <x-button-link
                x-on:click="toggleFormNewReg(['Cerrar', 'Crear'])">
                <span x-text="textButton"></span>
            </x-button-link>
        </div>
        <div x-cloak x-show="open">
            <x-files.create-file trigger="open"></x-files.create-file>
        </div>
    </div>

    <div class="p-5">
        <x-gam-table></x-gam-table>
    </div>
</div>
