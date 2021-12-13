<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-end mt-4">
        <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('edit-user') }}"
            style="color:#FA4A0C;font-weight:bold;font-size:16px; text-decoration: none;">
            {{ __('User information') }}
        </a>
    </div>
</x-app-layout>
