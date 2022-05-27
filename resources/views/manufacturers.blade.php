<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ensambladoras') }}

            <a href="{{ route('manufacturers.add') }}" style="display: inline-block">
                <x-gmdi-library-add class="text-gray-900 hover:text-gray-500"/>
            </a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-sm text-left text-gray-500 border-2 rounded-full border-cyan-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-2">ID</th>
                                <th scope="col" class="px-6 py-2">Ensambladora</th>
                                <th scope="col" class="px-6 py-2"><span class="sr-only">Editar y Eliminar</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white border-b text-sm">
                            @foreach ($manufacturers as $manufacturer)
                            <tr class="whitespace-nowrap">
                                <th scope="row" class="px-6 py-4">
                                    {{ $manufacturer->id }}
                                </th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $manufacturer->manufacturer_name }}
                                </td>
                                <td class="px-6 py-4 flex justify-evenly">
                                    <a href="{{ route('manufacturers.update', $manufacturer->id) }}" class="">
                                        <x-far-edit class="text-blue-800 hover:text-blue-400"/>
                                    </a>
                                    {{-- llamar a la funcion delete del controlador, pasandole la id de $casal->id con un link y hacer un reload a la pagina--}}
                                    <a href="{{ route('manufacturers.delete', $manufacturer->id) }}">
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