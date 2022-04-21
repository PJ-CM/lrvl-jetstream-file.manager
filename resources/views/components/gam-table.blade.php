@props([
'files',
])

<table class="table-fixed">
    <thead class="border-gray-500 border-y-2">
        <tr>
            <th class="w-2/12">Título</th>
            <th class="w-3/12">Descripción</th>
            <th class="w-3/12">Previo</th>
            <th class="w-2/12">Fecha Creación</th>
            <th class="w-2/12">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($files as $file)
        <tr class="odd:bg-sky-100 even:bg-sky-700 even:text-white">
            <td class="p-2">{{ $file->title }}</td>
            <td class="p-2">{{ $file->description }}</td>
            <td class="p-2"><img class="m-2 rounded-lg" src="{{ $file->url }}" alt="{{ $file->title }}<" /></td>
            <td class="p-2">{{ $file->created_at_for_humans }}</td>
            <td class="flex flex-row items-center justify-center p-2">
                <x-jet-button class="mr-2 bg-blue-400" x-bind:disabled="open">Editar</x-jet-button>
                <x-jet-button class="mr-2 bg-red-500" x-bind:disabled="open">Borrar</x-jet-button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
