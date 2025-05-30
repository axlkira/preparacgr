@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Panel de Administración</h1>
        <p>Bienvenido, {{ Auth::user()->name }}. Tu rol es <span class="font-semibold">{{ Auth::user()->role }}</span>.</p>
    </div>
</div>
@endsection
