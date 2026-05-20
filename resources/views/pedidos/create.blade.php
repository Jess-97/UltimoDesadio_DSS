@extends('layouts.admin')

@section('content')

<div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
    
    <div class="bg-pink-500 p-6 flex justify-between items-center text-white">
        <div>
            <h1 class="text-2xl font-bold">NUEVO PEDIDO</h1>
            <p class="text-pink-100 text-sm">Pet Shop System</p>
        </div>
        <div class="text-4xl">🐾</div>
    </div>

    <div class="p-8">
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2 flex items-center gap-2">
                    <span>👤</span> Cliente
                </label>
                <input type="text" name="cliente" 
                    class="w-full border border-gray-200 rounded-xl p-3 focus:ring-2 focus:ring-pink-300 outline-none transition" 
                    placeholder="Nombre del cliente">
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2 flex items-center gap-2">
                    <span>💰</span> Total
                </label>
                <input type="number" name="total" step="0.01" 
                    class="w-full border border-gray-200 rounded-xl p-3 focus:ring-2 focus:ring-pink-300 outline-none transition" 
                    placeholder="0.00">
            </div>

            <div class="mb-8">
                <label class="block text-gray-700 font-semibold mb-2 flex items-center gap-2">
                    <span>📦</span> Estado
                </label>
                <select name="estado" class="w-full border border-gray-200 rounded-xl p-3 focus:ring-2 focus:ring-pink-300 outline-none transition bg-white">
                    <option value="Pendiente">Pendiente</option>
                    <option value="Enviado">Enviado</option>
                    <option value="Entregado">Entregado</option>
                </select>
            </div>

            <div class="flex gap-4">
                <button type="button" class="flex-1 border border-pink-500 text-pink-500 hover:bg-pink-50 font-semibold py-3 rounded-xl transition">
                    Cancelar
                </button>
                <button type="submit" class="flex-1 bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 rounded-xl shadow-md transition flex items-center justify-center gap-2">
                    <span>💾</span> Guardar Pedido
                </button>
            </div>
        </form>
    </div>
</div>

@endsection