@extends('welcome')

@section('contenido')

        <div class="p-6 border-b border-white/10">
            <h2 class="text-3xl font-bold text-white">
                Lista de Inventarios
            </h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-white">
                <thead class="bg-white/10 uppercase text-sm tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Nombre</th>
                        <th class="px-6 py-4">Stock Disponible</th>
                        <th class="px-6 py-4">Precio</th>
                        <th class="px-6 py-4">ID Producto</th>
                        <th class="px-6 py-4 text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($inventarios as $item)
                        <tr class="border-b border-white/10 hover:bg-white/10 transition duration-300">
                            <td class="px-6 py-4">{{ $item->producto->nombre }}</td>
                            <td class="px-6 py-4">{{ $item->stockdisponible }}</td>
                            <td class="px-6 py-4">${{ $item->producto->precio }}</td>
                            <td class="px-6 py-4">{{ $item->producto_id }}</td>

                            <td class="px-6 py-4 text-center">
                                <button
                                    class="px-4 py-2 rounded-lg bg-blue-500/70 hover:bg-blue-500 text-white font-semibold transition duration-300 shadow-lg">
                                    Cambiar
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-8 text-gray-300">
                                No hay inventarios registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        
    <div class="mt-6 flex justify-center">
        {{ $inventarios->links() }}
    </div>
@endsection