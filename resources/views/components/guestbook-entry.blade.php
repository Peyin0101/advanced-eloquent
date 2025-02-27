<li
    class="{{ !$entry->is_approved ? 'opacity-50' : '' }} bg-white dark:bg-gray-800 border shadow rounded p-4 border-gray-200 dark:border-gray-700 py-4">
    <p class="text-gray-900 font-bold dark:text-gray-100">{{ $entry->name }}</p>
    @if ($entry->is_approved)
        <p class="text-gray-900 dark:text-gray-100">{{ $entry->message }}</p>
    @else
        <p class="italic text-gray-400 dark:text-gray-500">This entry has not been approved yet.</p>
    @endif
    <small class="block text-gray-500 dark:text-gray-400">{{ $entry->created_at->format('d M Y, H:i') }}</small>
</li>
