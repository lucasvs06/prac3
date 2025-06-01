<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Nieuw Team Aanmaken</h1>

        <form method="POST" action="{{ route('teams.store') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name">Teamnaam</label>
                <input type="text" name="name" id="name" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label for="player_count">Aantal Spelers</label>
                <input type="number" name="player_count" id="player_count" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label for="coach_name">Coach Naam</label>
                <input type="text" name="coach_name" id="coach_name" class="w-full border p-2 rounded" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Aanmaken
            </button>
        </form>
    </div>
</x-app-layout>
