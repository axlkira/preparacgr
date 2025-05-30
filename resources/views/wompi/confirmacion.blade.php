<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pago - Wompi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-900 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 max-w-lg w-full text-center">
        <h1 class="text-2xl font-bold mb-4 text-blue-900">Confirmación de Pago</h1>
        @if($error)
            <div class="text-red-600 font-semibold mb-6">{{ $error }}</div>
        @else
            <div class="mb-6">
                <div class="text-lg font-bold mb-2">Referencia: <span class="text-blue-700">{{ $reference }}</span></div>
                <div class="text-lg mb-2">Monto: <span class="text-blue-700">${{ number_format(($amount ?? 0)/100, 0, ',', '.') }}</span></div>
                <div class="text-lg mb-2">ID de transacción: <span class="text-gray-700">{{ $transactionId }}</span></div>
                <div class="text-lg mb-2">Estado:
                    @if($status === 'APPROVED')
                        <span class="text-green-600 font-bold">Pago aprobado</span>
                    @elseif($status === 'DECLINED')
                        <span class="text-red-600 font-bold">Pago rechazado</span>
                    @elseif($status === 'VOIDED')
                        <span class="text-yellow-600 font-bold">Pago anulado</span>
                    @elseif($status === 'PENDING')
                        <span class="text-yellow-600 font-bold">Pago pendiente</span>
                    @else
                        <span class="text-gray-600 font-bold">{{ $status ?? 'Desconocido' }}</span>
                    @endif
                </div>
            </div>
            <a href="/" class="inline-block mt-4 px-6 py-2 bg-blue-900 text-white rounded-lg font-bold hover:bg-blue-800 transition">Volver al inicio</a>
        @endif
    </div>
</body>
</html>
