<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    public function index()
    {
        // 1. Obtenemos todos los pedidos para tu vista de listado
        $pedidos = Pedido::all();

        // 2. Calculamos los totales para las tarjetas
        $totalPedidos = Pedido::count();
        $pendientes = Pedido::where('estado', 'Pendiente')->count();
        $enviados = Pedido::where('estado', 'Enviado')->count();
        $entregados = Pedido::where('estado', 'Entregado')->count();

        // 3. AGREGADO: Obtenemos los últimos 5 pedidos para el Dashboard
        $pedidosRecientes = Pedido::latest()->take(5)->get();

        // 4. Enviamos todo a la vista
        return view('pedidos.index', compact(
            'pedidos',
            'totalPedidos',
            'pendientes',
            'enviados',
            'entregados',
            'pedidosRecientes' // <--- Añadido aquí
        ));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {

        Pedido::create([

            'cliente' => $request->cliente,
            'total' => $request->total,
            'estado' => $request->estado,

        ]);

        return redirect('/pedidos');

    }

    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

}