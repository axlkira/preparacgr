<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WompiController extends Controller
{
    // Muestra el resultado del pago al usuario
    public function confirmacion(Request $request)
    {
        $transactionId = $request->query('id');
        $status = null;
        $amount = null;
        $reference = null;
        $data = null;
        $error = null;

        if ($transactionId) {
            // Consultar el estado real de la transacción en la API de Wompi (sandbox)
            $response = Http::get('https://sandbox.wompi.co/v1/transactions/' . $transactionId);
            if ($response->ok() && isset($response["data"])) {
                $data = $response["data"];
                $status = $data["status"] ?? null;
                $amount = $data["amount_in_cents"] ?? null;
                $reference = $data["reference"] ?? null;
            } else {
                $error = 'No se pudo consultar la transacción.';
            }
        } else {
            $error = 'No se recibió el ID de la transacción.';
        }

        return view('wompi.confirmacion', compact('transactionId', 'status', 'amount', 'reference', 'data', 'error'));
    }
}
