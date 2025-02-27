<x-layout>
    <div class="mb-8">
        <a href="{{ route('guestbook.index') }}"
            class="bg-blue-500 hover:bg-blue-700 transition text-white font-bold py-2 px-4 rounded">Back to guestbook</a>
    </div>
    <h2 class="mb-4 mt-12 text-xl font-semibold text-gray-900 dark:text-gray-100">Entries to approve</h2>
    @if ($entries->isEmpty())
        <p class="text-gray-900 dark:text-gray-300">No entries to approve.</p>
    @else
        <ul class="flex flex-col gap-4">
            @foreach ($entries as $entry)
                <x-guestbook-approve-entry :entry="$entry" />
            @endforeach
        </ul>
        <div class="mt-8">
            {{ $entries->links() }}
        </div>
    @endif
</x-layout>
