@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Editar Rol de Usuario</h1>
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Nombre</label>
                <input type="text" value="{{ $user->name }}" disabled class="w-full mt-1 p-2 border rounded" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" value="{{ $user->email }}" disabled class="w-full mt-1 p-2 border rounded" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Rol</label>
                <select name="role" class="w-full mt-1 p-2 border rounded">
                    <option value="admin" @if($user->role=='admin') selected @endif>Admin</option>
                    <option value="estudiante" @if($user->role=='estudiante') selected @endif>Estudiante</option>
                    <option value="invitado" @if($user->role=='invitado') selected @endif>Invitado</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar Rol</button>
            <a href="{{ route('admin.users.index') }}" class="ml-4 text-gray-500 hover:underline">Cancelar</a>
        </form>
    </div>
</div>
@endsection
