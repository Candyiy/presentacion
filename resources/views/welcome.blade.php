<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-[#0C0E10] text-white font-mono text-emerald-400 tracking-tight font-light">

    <!--sidebar-->

    <div class="flex min-h-screen">

    <!-- Sidebar -->

    <aside class="w-64 bg-[#14181f] border-r border-[#262b33] flex flex-col justify-between">

        <div>

            <div class="p-6 border-b border-[#262b33] flex items-center gap-4">

                <div class="w-11 h-11 rounded-lg bg-cyan-400 flex items-center justify-center text-black">
                    <i class="ri-box-3-fill text-xl"></i>
                </div>

                <div>
                    <h1 class="text-xl font-bold">Coke</h1>
                    <p class="text-[10px] tracking-[3px] text-gray-500">
                        SISTEMA DE VENTA DE REGALOS
                    </p>
                </div>

            </div>

            <nav class="p-4 space-y-2">

            <a class="flex items-center gap-3 bg-[#1d2129] px-4 py-3 rounded-lg text-white" href="{{ route('producto.principal') }}">

                    <i class="ri-dashboard-line"></i>

                    Principal

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

                    <!--
                    <span class="ml-auto bg-yellow-700 text-xs px-2 rounded">
                        5
                    </span>
                -->
                </a>
        </nav>



        </div>

        <div class="border-t border-[#262b33] p-5 flex gap-3">

            <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center">

                AC

            </div>

            <div>

                <p class="font-semibold">
                    Admin
                </p>

                <p class="text-xs text-gray-500">
                    admin@stockflow.io
                </p>

            </div>

        </div>

    </aside>

    <!--contenido-->

    <main class="flex-1 p-8">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold">
                Tienda de regalos
            </h1>

            <p class="text-gray-500">
                
            </p>

        </div>

        <div class="bg-[#161b22] border border-[#2a3039] px-5 py-2 rounded-lg flex items-center gap-3">

            <span class="w-2 h-2 rounded-full bg-green-400"></span>

            En línea

        </div>

    </div>

    <!--cards-->
<!--
    <div class="grid grid-cols-4 gap-6 mt-8">

    <div class="bg-[#161b22] border border-[#262b33] rounded-xl p-6">

        <p class="text-xs tracking-[2px] text-gray-500">
            INGRESOS (7D)
        </p>

        <h2 class="text-5xl font-bold mt-3">
            US$2.054
        </h2>

        <p class="text-cyan-400 mt-4 text-sm">
            ▲ +12.4% vs semana anterior
        </p>

    </div>

    <div class="bg-[#161b22] border border-[#262b33] rounded-xl p-6">

        <p class="text-xs tracking-[2px] text-gray-500">
            GANANCIA (7D)
        </p>

        <h2 class="text-5xl font-bold mt-3">
            US$1.038
        </h2>

        <p class="text-cyan-400 mt-4 text-sm">
            ▲ Margen 51%
        </p>

    </div>

    <div class="bg-[#161b22] border border-[#262b33] rounded-xl p-6">

        <p class="text-xs tracking-[2px] text-gray-500">
            VENTAS
        </p>

        <h2 class="text-5xl font-bold mt-3">
            6
        </h2>

        <p class="text-gray-500 mt-4">
            1 pendientes
        </p>

    </div>

    <div class="bg-[#161b22] border border-[#262b33] rounded-xl p-6">

        <p class="text-xs tracking-[2px] text-gray-500">
            STOCK CRÍTICO
        </p>

        <h2 class="text-5xl font-bold mt-3">
            5
        </h2>

        <p class="text-red-500 mt-4">
            ▼ 2 agotados
        </p>

    </div>

</div>
-->
    <!--graficos-->

    <div class="grid grid-cols-1 gap-6 mt-6">

        <div class="col-span-2 bg-[#161b22] border border-[#262b33] rounded-xl h-[800px]">
            @yield('contenido')
        </div>


    </div>
</body>
</html>