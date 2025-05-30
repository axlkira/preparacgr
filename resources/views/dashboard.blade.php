<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            You're logged in!
            <div class="mt-4 text-blue-400">Rol actual: <b>{{ Auth::user()->role }}</b></div>
            </div>
        </div>
    </div>
</x-app-layout>
