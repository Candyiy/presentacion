


        <nav class="p-4 space-y-2">

            <a class="flex items-center gap-3 bg-[#1d2129] px-4 py-3 rounded-lg text-white">

                    <i class="ri-dashboard-line"></i>

                    Dashboard

                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[#1d2129] text-gray-400" href="{{ route('producto.index') }}">

                    <i class="ri-box-3-line"></i>

                    Productos

                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[#1d2129] text-gray-400" href="{{ route('venta.index') }}">

                    <i class="ri-shopping-cart-line"></i>

                    Ventas

                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[#1d2129] text-gray-400" href="{{ route('inventario.index') }}">

                    <i class="ri-bar-chart-line"></i>

                    Inventario

                    <span class="ml-auto bg-yellow-700 text-xs px-2 rounded">
                        5
                    </span>

                </a>
        </nav>

