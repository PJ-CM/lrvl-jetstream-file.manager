@props([
    // Propiedad expuesta como obligatoria
    // sin valor predeterminado
    'trigger',
    // Propiedad expuesta como requerida
    // con valor predeterminado de ejemplo
    // Su valor debería ser relativo a lo que se quiera pasar,
    // en este caso, el nombre de la variable necesaria aquí
    //'trigger' => 'creatingNewReg',
    // -------------------------------------
    //'mediaId' => 0,
    'mediaId',
])

<div x-show="{{ $trigger }}">
    <h1 class="text-2xl font-bold text-center mt-18">Crear un Nuevo Registro</h1>
    <x-guarded-form
        class="flex flex-col justify-center w-full p-10 mt-10 bg-gray-100"
        wire:submit.prevent="create"
    >
        @csrf
        <x-jet-label class="pl-2" for="title">Nombre del Archivo</x-jet-label>
        <x-jet-input
            class="w-full rounded-lg"
            type="text"
            required
            wire:model="file.title">
        </x-jet-input>
        <x-jet-input-error for="file.title" class="mt-2" />

        <x-jet-label class="pl-2 mt-10" for="description">Descripción</x-jet-label>
        <textarea
            class="w-full border-gray-300 rounded-lg"
            rows="5"
            wire:model="file.description"
        ></textarea>
        <x-jet-input-error for="file.description" class="mt-2" />

        <div class="mt-10">
            <x-jet-label for="file">Archivo Multimedia</x-jet-label>
            <x-jet-input
                type="file"
                class="w-full p-5 border border-gray-300"
                wire:model="media"
                id="upload{{ $mediaId }}"
            />
        </div>
        <x-jet-input-error for="media" class="mt-2" />

        <div class="flex flex-row m-auto mt-10">
            <x-jet-button
                class="mr-1 rounded-full"
                x-on:click="{{ $trigger }}=showHide();textButton='Crear'"
            >
                Cancelar
            </x-jet-button>
            <x-jet-button class="ml-1 rounded-full"
                x-on:click="textButton='Crear'">
                Publicar
            </x-jet-button>
        </div>
    </x-guarded-form>
</div>
