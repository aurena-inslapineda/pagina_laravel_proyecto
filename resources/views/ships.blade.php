<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Naves') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-sm text-left text-gray-500 border-2 rounded-full border-cyan-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-2">ID</th>
                                <th scope="col" class="px-6 py-2">Nombre</th>
                                <th scope="col" class="px-6 py-2">Ensambladora</th>
                                <th scope="col" class="px-6 py-2">Rol</th>
                                <th scope="col" class="px-6 py-2">Focus</th>
                                <th scope="col" class="px-6 py-2">Imagen</th>
                                <th scope="col" class="px-6 py-2">Tripulacion</th>
                                <th scope="col" class="px-6 py-2">Longitud</th>
                                <th scope="col" class="px-6 py-2">Masa</th>
                                <th scope="col" class="px-6 py-2">Precio unidad</th>
                                <th scope="col" class="px-6 py-2">Stock</th>
                                <th scope="col" class="px-6 py-2"><span class="sr-only">Editar Y Eliminar</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white border-b text-sm">
                            @foreach ($ships as $ship)
                            <tr class="whitespace-nowrap">
                                <th scope="row" class="px-6 py-4">
                                    {{ $ship->id }}
                                </th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->ship_name }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $manufacturers[$ship->manufacturer_id - 1]->manufacturer_name }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $rols[$ship->rol_id - 1]->rol_name }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $focus[$ship->focus_id - 1]->focus_name }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->ship_image }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->crew_size }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->length }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->mass }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->unit_price }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $ship->units_in_stock }}
                                </td>
                                <td class="px-6 py-4 flex justify-evenly">
                                    <a href="#" class="">
                                        <x-far-edit class="text-blue-800 hover:text-blue-400"/>
                                    </a>
                                    <a href="{{ route('ships.delete', $ship->id) }}">
                                        <x-far-trash-alt class="text-red-800 hover:text-red-400" />
                                    </a
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>