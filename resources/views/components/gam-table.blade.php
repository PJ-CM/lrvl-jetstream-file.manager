<table class="table-fixed">
    <thead class="border-y-2 border-gray-500">
        <tr>
            <th class="w-2/12">Título</th>
            <th class="w-3/12">Descripción</th>
            <th class="w-3/12">Previo</th>
            <th class="w-2/12">Fecha Creación</th>
            <th class="w-2/12">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd:bg-sky-100 even:bg-sky-700 even:text-white">
            <td class="p-2">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
            <td class="p-2">Esta es la descripción.</td>
            <td class="p-2"><img src="*" alt="El Previo" /></td>
            <td class="p-2">Hace 5 días</td>
            <td class="flex flex-row p-2 justify-center items-center">
                <x-jet-button class="mr-2 bg-blue-400" x-bind:disabled="creatingNewReg">Editar</x-jet-button>
                <x-jet-button class="mr-2 bg-red-500" x-bind:disabled="creatingNewReg">Borrar</x-jet-button>
            </td>
        </tr>
        <tr class="odd:bg-sky-100 even:bg-sky-700 even:text-white">
            <td class="p-2">Witchy Woman</td>
            <td class="p-2">The Eagles</td>
            <td class="p-2">1972</td>
            <td class="p-2">1961</td>
            <td class="flex flex-row p-2 justify-center items-center">
                <x-jet-button class="mr-2 bg-blue-400" x-bind:disabled="creatingNewReg">Editar</x-jet-button>
                <x-jet-button class="mr-2 bg-red-500" x-bind:disabled="creatingNewReg">Borrar</x-jet-button>
            </td>
        </tr>
        <tr class="odd:bg-sky-100 even:bg-sky-700 even:text-white">
            <td class="p-2">Shining Star</td>
            <td class="p-2">Earth, Wind, and Fire</td>
            <td class="p-2">1975</td>
            <td class="p-2">1961</td>
            <td class="flex flex-row p-2 justify-center items-center">
                <x-jet-button class="mr-2 bg-blue-400" x-bind:disabled="creatingNewReg">Editar</x-jet-button>
                <x-jet-button class="mr-2 bg-red-500" x-bind:disabled="creatingNewReg">Borrar</x-jet-button>
            </td>
        </tr>
    </tbody>
</table>
