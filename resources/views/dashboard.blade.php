<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welkom op de schoolvoetbal site!") }}
                </div>
            </div>
        </div>
    </div>

    @auth
    @if(auth()->user()->is_admin)
        <form action="{{ route('teams.deleteAll') }}" method="POST" onsubmit="return confirm('Weet je zeker dat je alle teams wilt verwijderen?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded mt-4">
                Verwijder alle teams
            </button>
        </form>
    @endif
@endauth
</x-app-layout>
