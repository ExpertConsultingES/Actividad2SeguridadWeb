<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Información del usuario</h3>

                    <ul class="list-disc pl-6 space-y-2">
                        <li><strong>Nombre:</strong> {{ $user->name }}</li>
                        <li><strong>Email:</strong> {{ $user->email }}</li>
                        <li><strong>Teléfono:</strong> {{ $user->telefono }}</li>
                        <li><strong>Dirección:</strong> {{ $user->direccion }}</li>
                        <li><strong>Rol:</strong> {{ $user->rol }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
