@extends('welcome')

@section('contenido')

<h2>Lista de ventassssssssssss</h2>

    <table class="w-full text-sm text-left text-gray-600">
      <thead class="bg-gray-800 text-white uppercase">
        <tr>
          <th class="px-6 py-3">ID</th>
          <th class="px-6 py-3">Fecha</th>
          <th class="px-6 py-3">Cliente</th>
          <th class="px-6 py-3">Productos</th>
          <th class="px-6 py-3">Total</th>
          <th class="px-6 py-3">Estado</th>
        </tr>
      </thead>

      <tbody class="divide-y">
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 font-medium">#001</td>
          <td class="px-6 py-4">07/07/2026</td>
          <td class="px-6 py-4">Juan Pérez</td>
          <td class="px-6 py-4">Laptop, Mouse</td>
          <td class="px-6 py-4">$850.00</td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">
              Completado
            </span>
          </td>
        </tr>

        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 font-medium">#002</td>
          <td class="px-6 py-4">06/07/2026</td>
          <td class="px-6 py-4">María López</td>
          <td class="px-6 py-4">Teclado, Monitor</td>
          <td class="px-6 py-4">$420.00</td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 rounded-full text-xs bg-yellow-100 text-yellow-700">
              Pendiente
            </span>
          </td>
        </tr>

        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 font-medium">#003</td>
          <td class="px-6 py-4">05/07/2026</td>
          <td class="px-6 py-4">Carlos Ruiz</td>
          <td class="px-6 py-4">Auriculares</td>
          <td class="px-6 py-4">$75.00</td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">
              Cancelado
            </span>
          </td>
        </tr>
      </tbody>
    </table>
@endsection