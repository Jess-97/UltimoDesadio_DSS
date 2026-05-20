<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Models\Pedido;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {

    $totalPedidos = Pedido::count();

    $pendientes = Pedido::where('estado', 'Pendiente')->count();

    $enviados = Pedido::where('estado', 'Enviado')->count();

    $entregados = Pedido::where('estado', 'Entregado')->count();

    return view('dashboard', compact(
        'totalPedidos',
        'pendientes',
        'enviados',
        'entregados'
    ));

})->name('dashboard');

Route::resource('pedidos', PedidoController::class);