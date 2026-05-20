@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Gestión de Pedidos</h1>
        <p class="text-gray-500 mt-2">Administra todos los pedidos de tu tienda.</p>
    </div>
    <a href="{{ route('pedidos.create') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-xl">
        + Nuevo pedido
    </a>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="bg-pink-100 p-4 rounded-full text-pink-500">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Total de Pedidos</p>
            <h2 class="text-2xl font-bold">{{ $totalPedidos }}</h2>
            <div class="flex items-center gap-2">
                <span class="text-xs text-gray-400">Este mes</span>
                <span class="bg-pink-100 text-pink-500 text-[10px] px-2 py-0.5 rounded-full font-bold">↑ 12%</span>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="bg-pink-100 p-4 rounded-full text-pink-500">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Pendientes</p>
            <h2 class="text-2xl font-bold">{{ $pendientes }}</h2>
            <div class="flex items-center gap-2">
                <span class="text-xs text-gray-400">Por procesar</span>
                <span class="bg-orange-100 text-orange-500 text-[10px] px-2 py-0.5 rounded-full font-bold">↑ 8%</span>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="bg-pink-100 p-4 rounded-full text-pink-500">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zM18 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Enviados</p>
            <h2 class="text-2xl font-bold">{{ $enviados }}</h2>
            <div class="flex items-center gap-2">
                <span class="text-xs text-gray-400">Este mes</span>
                <span class="bg-green-100 text-green-500 text-[10px] px-2 py-0.5 rounded-full font-bold">↑ 15%</span>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="bg-pink-100 p-4 rounded-full text-pink-500">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Entregados</p>
            <h2 class="text-2xl font-bold">{{ $entregados }}</h2>
            <div class="flex items-center gap-2">
                <span class="text-xs text-gray-400">Completados</span>
                <span class="bg-green-100 text-green-500 text-[10px] px-2 py-0.5 rounded-full font-bold">↑ 20%</span>
            </div>
        </div>
    </div>

</div>


<div class="bg-white rounded-2xl shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50/50">
            <tr class="text-left text-pink-400 text-sm font-bold uppercase tracking-wider">
                <th class="p-6">Pedido</th>
                <th class="p-6">Cliente</th>
                <th class="p-6">Estado</th>
                <th class="p-6">Total</th>
                <th class="p-6">Método de Envío</th>
                <th class="p-6 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($pedidos as $pedido)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-5">
                    <div class="flex items-center gap-3">
                        <div class="bg-pink-100 p-3 rounded-full text-pink-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-800">{{ $pedido->id }}</div>
                            <div class="text-xs text-gray-500">{{ $pedido->cantidad_productos ?? 2 }} productos</div>
                        </div>
                    </div>
                </td>

                <td class="p-5">
                    <div class="flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name={{ $pedido->cliente }}&background=random" class="w-8 h-8 rounded-full">
                        <div>
                            <div class="font-medium text-gray-800">{{ $pedido->cliente }}</div>

                        </div>
                    </div>
                </td>

                <td class="p-5">
                    @php
                    $clases = [
                    'Pendiente' => 'bg-yellow-50 text-yellow-600 border-yellow-100',
                    'En Proceso' => 'bg-blue-50 text-blue-600 border-blue-100',
                    'Enviado' => 'bg-purple-50 text-purple-600 border-purple-100',
                    'Entregado' => 'bg-green-50 text-green-600 border-green-100',
                    'Cancelado' => 'bg-gray-100 text-gray-600 border-gray-200'
                    ];
                    @endphp
                    <span class="px-3 py-1 rounded-full text-xs font-semibold border {{ $clases[$pedido->estado] ?? 'bg-gray-50' }}">
                        {{ $pedido->estado }}
                    </span>
                </td>

                <td class="p-5 font-bold text-gray-800">S/ {{ $pedido->total }}</td>

                <td class="p-5">
                    <div class="font-medium text-gray-800 text-sm">Envío Local</div>
                    <div class="text-xs text-gray-500">2 - 3 días hábiles</div>
                </td>

                <td class="p-5 flex items-center gap-2 mt-2">
                    <a href="{{ route('pedidos.show', $pedido) }}"
                        class="inline-block bg-pink-50 p-2.5 rounded-lg text-pink-500 hover:bg-pink-100 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </a>
                    <button class="text-gray-400 hover:text-gray-600">⋮</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection