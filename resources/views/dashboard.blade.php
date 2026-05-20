<style>
    /* Estilos globales */
    .dashboard-card {
        background-color: #ffffff;
        border: 1px solid #f3f4f6;
        border-radius: 24px;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: transform 0.2s ease;
    }

    .card-title {
        color: #9ca3af;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .card-value {
        color: #1f2937;
        font-size: 1.5rem;
        font-weight: 800;
        margin-top: 0.25rem;
    }

    .dashboard-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
    }

    /* Contenedor de secciones */
    .section-box {
        background: white;
        border-radius: 24px;
        border: 1px solid #f3f4f6;
        padding: 1.5rem;
    }
</style>

@extends('layouts.admin')

@section('content')
<div class="flex flex-col items-end w-full mb-8">
    
    <div class="inline-flex items-center gap-3 bg-white border border-gray-100 p-3 pr-6 rounded-full shadow-sm">
        <img src="{{ asset('images/avatar.jpg') }}" alt="Admin" class="w-10 h-10 rounded-full object-cover">
        
        <div class="text-left">
            <p class="text-sm font-bold text-gray-800">Administrador</p>
            <p class="text-xs text-gray-500">admin@petshop.com</p>
        </div>
    </div>

</div>

<div class="mb-8 text-left">
    <h1 class="text-3xl font-bold text-gray-800">¡Hola, Administrador! 👋</h1>
    <p class="text-gray-500 font-medium mt-1">Bienvenido al panel de administración de tu PetShop</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <div class="dashboard-card shadow-sm">
        <div>
            <h3 class="card-title">Total Pedidos</h3>
            <p class="card-value">{{ $totalPedidos }}</p>
        </div>
        <div class="bg-purple-50 text-purple-500 p-3 rounded-2xl"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg></div>
    </div>

    <div class="dashboard-card shadow-sm">
        <div>
            <h3 class="card-title">Pendientes</h3>
            <p class="card-value">{{ $pendientes }}</p>
        </div>
        <div class="bg-yellow-50 text-yellow-500 p-3 rounded-2xl"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg></div>
    </div>

    <div class="dashboard-card shadow-sm">
        <div>
            <h3 class="card-title">Enviados</h3>
            <p class="card-value">{{ $enviados }}</p>
        </div>
        <div class="bg-blue-50 text-blue-500 p-3 rounded-2xl"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg></div>
    </div>

    <div class="dashboard-card shadow-sm">
        <div>
            <h3 class="card-title">Entregados</h3>
            <p class="card-value">{{ $entregados }}</p>
        </div>
        <div class="bg-green-50 text-green-500 p-3 rounded-2xl"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg></div>
    </div>

</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <div class="lg:col-span-2 section-box">
        <h2 class="font-bold text-gray-800 mb-4">Resumen de ventas</h2>
        <div class="h-64">
            <canvas id="ventasChart"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('ventasChart').getContext('2d');

            // Crear gradiente simulado
            const gradient = ctx.createLinearGradient(0, 0, 0, 250);
            gradient.addColorStop(0, 'rgba(244, 63, 94, 0.3)');
            gradient.addColorStop(1, 'rgba(244, 63, 94, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['1', '5', '10', '15', '20', '25', '30'],
                    datasets: [{
                        data: [500, 800, 700, 1500, 900, 1800, 1200],
                        borderColor: '#f43f5e',
                        backgroundColor: gradient,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 4,
                        pointBackgroundColor: '#f43f5e',
                        borderWidth: 3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            display: true,
                            grid: {
                                borderDash: [5, 5]
                            },
                            min: 0,
                            max: 2500
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        </script>
    </div>

</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    
    <div class="section-box">
        <h2 class="font-bold text-gray-800 mb-4">Acciones rápidas</h2>
        <div class="grid grid-cols-4 gap-4">
            <button class="p-4 bg-gray-50 rounded-2xl flex flex-col items-center hover:bg-gray-100 transition"><span class="text-xl">📁</span><span class="text-[10px] mt-1">Categoría</span></button>
            <button class="p-4 bg-gray-50 rounded-2xl flex flex-col items-center hover:bg-gray-100 transition"><span class="text-xl">🛍️</span><span class="text-[10px] mt-1">Producto</span></button>
            <button class="p-4 bg-gray-50 rounded-2xl flex flex-col items-center hover:bg-gray-100 transition"><span class="text-xl">🛒</span><span class="text-[10px] mt-1">Pedido</span></button>
            <button class="p-4 bg-gray-50 rounded-2xl flex flex-col items-center hover:bg-gray-100 transition"><span class="text-xl">👤</span><span class="text-[10px] mt-1">Usuario</span></button>
        </div>
    </div>

    <div class="section-box bg-rose-50 border-none flex items-center justify-between p-6">
        <div class="flex-1 pr-4">
            <h2 class="text-lg font-bold text-gray-800 leading-tight">¡Tu tienda en buenas patas!</h2>
            <p class="text-sm text-gray-600 mt-2">Sigue así, vas por un excelente camino.</p>
        </div>
        <div class="flex-shrink-0">
            <img src="{{ asset('images/perrito.png') }}" 
                 alt="Tu tienda en buenas patas" 
                 class="w-40 h-40 rounded-2xl object-cover shadow-lg transition-transform duration-300 hover:scale-105">
        </div>
    </div>
</div>

@endsection