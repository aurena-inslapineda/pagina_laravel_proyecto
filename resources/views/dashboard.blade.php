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
                    <table class="table-auto w-full text-sm text-left text-gray-500 border-2 rounded-full border-cyan-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-2">ID</th>
                                <th scope="col" class="px-6 py-2">User ID</th>
                                <th scope="col" class="px-6 py-2">Pagado</th>
                                <th scope="col" class="px-6 py-2">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="px-6 py-4">{{ $order->id }}</td>
                                <td class="px-6 py-4">{{ $order->user_id }}</td>
                                <td class="px-6 py-4">{{ $order->paid }}</td>
                                <td class="px-6 py-4">{{ $order->status }}</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table class="table-auto w-full text-sm text-left text-gray-500 border-2 rounded-full border-cyan-500">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-4 py-2">ID</th>
                                                <th scope="col" class="px-4 py-1">Linia ID</th>
                                                <th scope="col" class="px-6 py-1">Producto</th>
                                                <th scope="col" class="px-6 py-1">Cantidad</th>
                                                <th scope="col" class="px-6 py-1">Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_ship->where('order_id', $order->id) as $order_sp)
                                            <tr>
                                                <td class="px-6 py-4">{{ $order->id }}</td>
                                                <td class="px-6 py-2">{{ $order_sp->id }}</td>
                                                <td class="px-6 py-2">{{ $order_sp->ship_id }}</td>
                                                <td class="px-6 py-2">{{ $order_sp->quantity }}</td>
                                                <td class="px-6 py-2">{{ $order_sp->unit_price }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
