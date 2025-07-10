<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceOrder;

class ServiceOrderController extends Controller
{
    // POST /ordem de serviço
    public function store(Request $request)
    {
        $validated = $request->validate([
            'vehiclePlate'   => 'required|string|size:7',
            'entryDateTime'  => 'required|date',
            'exitDateTime'   => 'nullable|date',
            'priceType'      => 'nullable|string|max:55',
            'price'          => 'nullable|numeric',
            'userId'         => 'required|integer|exists:users,id'
        ]);

        $serviceOrder = ServiceOrder::create($validated);

        return response()->json([
            'message' => 'Ordem de serviço criada com sucesso.',
            'data' => $serviceOrder
        ], 200);
    }

    // GET /service-orders
    public function index()
    {
        $orders = ServiceOrder::with('user')->get();

        $data = $orders->map(function ($order) {
            return [
                'id'            => $order->id,
                'vehiclePlate'  => $order->vehiclePlate,
                'entryDateTime' => $order->entryDateTime,
                'exitDateTime'  => $order->exitDateTime,
                'priceType'     => $order->priceType,
                'price'         => $order->price,
                'userId'        => $order->userId,
                'userName'      => $order->user->name
            ];
        });

        return response()->json($data, 200);
    }
}
