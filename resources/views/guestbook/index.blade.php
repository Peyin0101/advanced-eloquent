<x-layout>
    <h1 class="mb-4 text-2xl font-bold text-gray-900 dark:text-gray-100">Guestbook</h1>
    <div class="bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-700 border shadow rounded">
        <div class="p-6">
            <x-add-guestbook-entry />
        </div>
    </div>
    <h2 class="mb-4 mt-12 text-xl font-semibold text-gray-900 dark:text-gray-100">Entries</h2>
    <div class="mb-8">
        <a href="{{ route('guestbook.unapproved') }}"
            class="bg-orange-500 hover:bg-orange-700 transition text-white font-bold py-2 px-4 rounded">Approve
            posts</a>
    </div>
    @if ($entries->isEmpty())
        <p class="text-gray-900 dark:text-gray-300">No entries yet.</p>
    @else
        <ul class="flex flex-col gap-4">
            @foreach ($entries as $entry)
                <x-guestbook-entry :entry="$entry" />
            @endforeach
        </ul>
        <div class="mt-8">
            {{ $entries->links() }}
        </div>
    @endif
</x-layout>
