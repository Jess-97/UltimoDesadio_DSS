@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-extrabold text-rose-900">Detalle de Pedido #{{ $pedido->id }}</h1>
        <a href="{{ route('pedidos.index') }}" 
           class="bg-white border-2 border-rose-200 text-rose-500 px-6 py-2 rounded-2xl hover:bg-rose-100 transition font-bold">
           Volver
        </a>
    </div>

    <div class="bg-white rounded-3xl border border-rose-100 shadow-xl shadow-rose-50 p-8 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <p class="text-xs uppercase tracking-widest text-rose-400 font-bold">Cliente</p>
                <p class="text-xl font-bold text-rose-900 mt-1">{{ $pedido->cliente }}</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-widest text-rose-400 font-bold">Total</p>
                <p class="text-2xl font-black text-rose-500 mt-1">${{ number_format($pedido->total, 2) }}</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-widest text-rose-400 font-bold">Estado</p>
                <span class="inline-block px-4 py-1 bg-rose-500 text-white rounded-full text-sm font-bold mt-1 shadow-md">
                    {{ $pedido->estado }}
                </span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-rose-100 shadow-xl shadow-rose-50 overflow-hidden">
        <div class="px-6 py-4 border-b border-rose-50">
            <h2 class="font-bold text-rose-800">Productos comprados</h2>
        </div>
        <table class="w-full text-left">
            <thead class="bg-rose-50">
                <tr>
                    <th class="px-6 py-4 text-xs font-black text-rose-400 uppercase tracking-wider">Producto</th>
                    <th class="px-6 py-4 text-xs font-black text-rose-400 uppercase tracking-wider">Cantidad</th>
                    <th class="px-6 py-4 text-xs font-black text-rose-400 uppercase tracking-wider">Subtotal</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-rose-50">
                @foreach($pedido->detalles as $detalle)
                <tr class="hover:bg-rose-50/50 transition">
                    <td class="px-6 py-4 text-rose-900 font-medium">{{ $detalle->producto->nombre }}</td>
                    <td class="px-6 py-4 text-rose-700">{{ $detalle->cantidad }}</td>
                    <td class="px-6 py-4 font-bold text-rose-600">${{ number_format($detalle->subtotal, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection