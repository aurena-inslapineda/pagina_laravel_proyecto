<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Mostrar las ordenes, dependiendo de si es usuario, que solo puede ver sus ordenes y admin que puede ver todas lasa ordenes --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-sm text-left text-gray-500 border-2 rounded-full border-cyan-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                {{-- <th scope="col" class="px-4 py-2">Desplegar</th> --}}
                                <th scope="col" class="px-4 py-2">ID</th>
                                <th scope="col" class="px-6 py-2">User ID</th>
                                <th scope="col" class="px-6 py-2">Pagado</th>
                                <th scope="col" class="px-6 py-2">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                {{-- <td class="px-4 py-4"><x-gmdi-menu class="text-red-800 hover:text-red-400"/></td> --}}
                                <td class="px-6 py-4">{{ $order->id }}</td>
                                <td class="px-6 py-4">{{ $order->user_id }}</td>
                                <td class="px-6 py-4">{{ $order->paid }}</td>
                                <td class="px-6 py-4">{{ $order->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
