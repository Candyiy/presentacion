@extends('welcome')

@section('contenido')

<br>

<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold text-white">
        Lista de Productos
    </h2>

    <button type="button"
        onclick="openCreateModal()"
        class="px-5 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-lg transition duration-300">
        + Nuevo producto
    </button>
</div>

<div class=" border border-[#374151] rounded-2xl shadow-2xl overflow-hidden">

    <div class="overflow-x-auto">
        <table class="w-full text-left text-white">
            <thead class="bg-white/10 uppercase text-sm tracking-wider">
                <tr>
                    <th class="px-6 py-4">Nombre</th>
                    <th class="px-6 py-4">Descripción</th>
                    <th class="px-6 py-4">Precio</th>
                    <th class="px-6 py-4">Stock</th>
                    <th class="px-6 py-4 text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($producto as $item)
                    <tr class="border-b border-[#374151] hover:bg-[#2d3748] transition duration-300">
                        <td class="px-6 py-4">{{ $item->nombre }}</td>
                        <td class="px-6 py-4">{{ $item->descripcion }}</td>
                        <td class="px-6 py-4">${{ $item->precio }}</td>
                        <td class="px-6 py-4">{{ $item->stock }}</td>

                        <td class="px-6 py-4">
                            <div class="flex justify-center gap-2">

                                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-white font-semibold transition" type="button"
                                    onclick="openEditModal(this)"
                                    data-id="{{ $item->id }}"
                                    data-nombre="{{ $item->nombre }}"
                                    data-descripcion="{{ $item->descripcion }}"
                                    data-categoria="{{ $item->categoria ?? '' }}"
                                    data-precio="{{ $item->precio }}"
                                    data-stock="{{ $item->stock }}"
                                    >
                                    Editar
                                </button>

                                <button type="button"
                                    onclick="openDeleteModal({{ $item->id }})"
                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white font-semibold transition">
                                    Eliminar
                                </button>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-8 text-gray-300">
                            No hay productos registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<div class="mt-6 flex justify-center">
    {{ $producto->links() }}
</div>

<div id="editModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm transition-opacity">
    <div class="rounded-xl shadow-xl max-w-lg w-full p-6 transform transition-all scale-95 opacity-0 duration-200 text-white" id="editModalBox" style="background-color: #0C0E10;">
        <div class="text-left mb-4">
            <h3 class="text-xl font-bold text-white">Editar Producto</h3>
        </div>
        <!-- Formulario de Edición con ID Dinámico -->
        <form id="editForm" method="POST" action="">
            @csrf
            @method('PUT')

            <div class="space-y-4 mb-6 max-h-[70vh] overflow-y-auto px-1">
                <div>
                    <label class="text-white font-semibold mb-2 block">Nombre</label>
                    <input class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" type="text" name="nombre" id="edit_nombre" required>
                </div>
                <div>
                    <label class="text-white font-semibold mb-2 block">Descripción</label>
                    <textarea class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" name="descripcion" id="edit_descripcion" rows="3"></textarea>
                </div>
                <div>
                    <label class="text-white font-semibold mb-2 block">Categoría</label>
                    <select class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-[#0C0E10] text-white focus:outline-none focus:border-blue-500" name="categoria" id="edit_categoria">
                        <option value="" disabled>Seleccione una categoría</option>
                        <option value="electrodomesticos">Electrodomésticos</option>
                        <option value="infantil">Infantil</option>
                        <option value="ropa">Ropa</option>
                    </select>
                </div>
                <div>
                    <label class="text-white font-semibold mb-2 block">Precio</label>
                    <input class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" type="number" step="0.01" name="precio" id="edit_precio" required>
                </div>
                <div>
                    <label class="text-white font-semibold mb-2 block">Stock</label>
                    <input type="number" class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" name="stock" id="edit_stock" required>
                </div>
            </div>
            <div class="flex gap-3 justify-end border-t border-gray-700 pt-4">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium rounded-lg transition-colors">Cancelar</button>
                <button type="submit" class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white font-medium rounded-lg transition-colors">Actualizar</button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL CREAR NUEVO PRODUCTO -->
<div id="createModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm transition-opacity">
    <div class="rounded-xl shadow-xl max-w-lg w-full p-6 transform transition-all scale-95 opacity-0 duration-200 text-white" id="createModalBox" style="background-color: #0C0E10;">
        
        <div class="text-left mb-4">
            <h3 class="text-xl font-bold text-gray-900">Crear Nuevo Producto</h3>
        </div>

        <!-- Formulario de Creación Integrado -->
        <form action="{{ route('producto.store') }}" method="POST">
            @csrf
            @method('post')

            <div class="space-y-4 mb-6 max-h-[70vh] overflow-y-auto px-1">
                <!-- Nombre -->
                <div>
                    <label class="text-dark dark:text-darklink font-semibold mb-2 block">Nombre</label>
                    <input class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
                    @error('nombre')
                        <span class="text-error text-red-600 text-sm block mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Descripción -->
                <div>
                    <label class="text-dark dark:text-darklink font-semibold mb-2 block">Descripción</label>
                    <textarea class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" name="descripcion" id="descripcion" rows="3">{{old('descripcion')}}</textarea>
                    @error('descripcion')
                        <span class="text-error text-red-600 text-sm block mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Selector de Categoría -->
                <div>
                    <label class="text-dark dark:text-darklink font-semibold mb-2 block">Categoría</label>
                    <select class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-[#0C0E10] text-white focus:outline-none focus:border-blue-500" name="categoria" id="categoria">
                        <option value="" disabled {{ old('categoria') === null ? 'selected' : '' }}>Seleccione una categoría</option>
                        <option value="electrodomesticos" {{ old('categoria') == 'electrodomesticos' ? 'selected' : '' }}>Electrodomésticos</option>
                        <option value="infantil" {{ old('categoria') == 'infantil' ? 'selected' : '' }}>Infantil</option>
                        <option value="ropa" {{ old('categoria') == 'ropa' ? 'selected' : '' }}>Ropa</option>
                    </select>
                    @error('categoria')
                        <span class="text-error text-red-600 text-sm block mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Precio -->
                <div>
                    <label class="text-dark dark:text-darklink font-semibold mb-2 block">Precio</label>
                    <input class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" type="number" step="0.01" name="precio" id="precio" value="{{old('precio')}}">
                    @error('precio')
                        <span class="text-error text-red-600 text-sm block mt-1">{{$message}}</span>
                    @enderror
                </div>
                
                <!-- Stock -->
                <div>
                    <label class="text-dark dark:text-darklink font-semibold mb-2 block">Stock</label>
                    <input type="number" class="form-control py-2 w-full border border-gray-700 rounded p-2 bg-transparent text-white focus:outline-none focus:border-blue-500" name="stock" id="stock" value="{{old('stock')}}">
                    @error('stock')
                        <span class="text-error text-red-600 text-sm block mt-1">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <!-- Botones de Acción -->
            <div class="flex gap-3 justify-end border-t pt-4">
                <button type="button" onclick="closeCreateModal()" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors">
                    Cancelar
                </button>
                <button type="submit" class="btn btn-success px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-colors">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>


<!-- Contenedor del Modal -->
<div id="deleteModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm transition-opacity">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6 transform transition-all scale-95 opacity-0 duration-200" id="modalBox">
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
        </div>

        <div class="text-center mb-6">
            <h3 class="text-lg font-semibold text-gray-900">¿Confirmar eliminación?</h3>
            <p class="text-sm text-gray-500 mt-2">Esta acción no se puede deshacer. El producto se borrará permanentemente.</p>
        </div>

        <form id="deleteForm" method="POST" action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">

            <div class="flex gap-3 justify-end">
                <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors">
                    Cancelar
                </button>
                <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors">
                    Sí, eliminar
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Variables Modal Eliminar
    const modal = document.getElementById('deleteModal');
    const modalBox = document.getElementById('modalBox');
    const form = document.getElementById('deleteForm');

    // Variables Modal Crear
    const createModal = document.getElementById('createModal');
    const createModalBox = document.getElementById('createModalBox');

    // VARIABLES MODAL EDITAR
    const editModal = document.getElementById('editModal');
    const editModalBox = document.getElementById('editModalBox');
    const editForm = document.getElementById('editForm');

    // Funciones Modal Crear
    function openCreateModal() {
        createModal.classList.remove('hidden');
        setTimeout(() => {
            createModalBox.classList.remove('scale-95', 'opacity-0');
            createModalBox.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeCreateModal() {
        createModalBox.classList.remove('scale-100', 'opacity-100');
        createModalBox.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            createModal.classList.add('hidden');
        }, 200);
    }

    // FUNCIONES MODAL EDITAR (Recibe el botón completo como parámetro)
    function openEditModal(button) {
        // Extraer los datos guardados en los atributos data-* del botón
        const id = button.getAttribute('data-id');
        const nombre = button.getAttribute('data-nombre');
        const descripcion = button.getAttribute('data-descripcion');
        const categoria = button.getAttribute('data-categoria');
        const precio = button.getAttribute('data-precio');
        const stock = button.getAttribute('data-stock');

        // Modificar dinámicamente la ruta del formulario de Laravel
        editForm.action = `/producto/${id}`;

        // Asignar los valores a los inputs del modal de edición
        document.getElementById('edit_nombre').value = nombre;
        document.getElementById('edit_descripcion').value = descripcion;
        document.getElementById('edit_categoria').value = categoria;
        document.getElementById('edit_precio').value = precio;
        document.getElementById('edit_stock').value = stock;

        // Mostrar el modal con su animación
        editModal.classList.remove('hidden');
        setTimeout(() => {
            editModalBox.classList.remove('scale-95', 'opacity-0');
            editModalBox.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeEditModal() {
        editModalBox.classList.remove('scale-100', 'opacity-100');
        editModalBox.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            editModal.classList.add('hidden');
        }, 200);
    }

    // Funciones Modal Eliminar
    function openDeleteModal(id) {
        form.action = `/producto/${id}`; 
        modal.classList.remove('hidden');
        setTimeout(() => {
            modalBox.classList.remove('scale-95', 'opacity-0');
            modalBox.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeDeleteModal() {
        modalBox.classList.remove('scale-100', 'opacity-100');
        modalBox.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 200);
    }

    // Cerrar modales al hacer clic afuera
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeDeleteModal();
    });

    createModal.addEventListener('click', (e) => {
        if (e.target === createModal) closeCreateModal();
    });

    // EVENTO CERRAR MODAL EDITAR AL HACER CLIC AFUERA
    editModal.addEventListener('click', (e) => {
        if (e.target === editModal) closeEditModal();
    });

    // MANTENER MODAL ABIERTO SI HAY ERRORES DE VALIDACIÓN
    @if ($errors->any())
        window.addEventListener('DOMContentLoaded', () => {
            openCreateModal();
        });
    @endif
</script>


@endsection
