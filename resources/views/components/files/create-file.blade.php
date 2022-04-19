@props([
    // Propiedad expuesta como obligatoria
    // sin valor predeterminado
    'trigger',
    // Propiedad expuesta como requerida
    // con valor predeterminado de ejemplo
    // Su valor debería ser relativo a lo que se quiera pasar,
    // en este caso, el nombre de la variable necesaria aquí
    //'trigger' => 'creatingNewReg',
])

<div x-show="{{ $trigger }}">
    <h1 class="font-bold text-2xl text-center mt-18">Crear un Nuevo Registro</h1>
    <x-guarded-form
        class="flex flex-col justify-center w-full bg-gray-100 mt-10 p-10"
        method="POST"
        action="{{ route('filesManager.store') }}"
    >
        @csrf
        <x-jet-label class="pl-2" for="title">Nombre del Archivo</x-jet-label>
        <x-jet-input
            class="w-full rounded-lg"
            name="title"
            type="text"
            required>
        </x-jet-input>
        <x-jet-input-error for="title" class="mt-2" />

        <x-jet-label class="mt-10 pl-2" for="description">Descripción</x-jet-label>
        <textarea
            class="rounded-lg w-full border-gray-300"
            name="description"
            rows="5"
        ></textarea>
        <x-jet-input-error for="description" class="mt-2" />

        <div class="mt-10">
            <x-jet-label for="file">Archivo Multimedia</x-jet-label>
            <x-jet-input
                type="file"
                name="file"
                class="border border-gray-300 w-full p-5"
            />
        </div>
        <x-jet-input-error for="file" class="mt-2" />

        <div class="mt-10 m-auto flex flex-row">
            <x-jet-button
                class="rounded-full mr-1"
                x-on:click="{{ $trigger }}=false;text='Crear'"
            >
                Cancelar
            </x-jet-button>
            <x-jet-button class="rounded-full ml-1">
                Publicar
            </x-jet-button>
        </div>
    </x-guarded-form>
</div>
