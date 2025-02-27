<li class="bg-white dark:bg-gray-800 border shadow rounded p-4 border-gray-200 dark:border-gray-700 py-4">
    <p class="text-gray-900 dark:text-gray-100 font-bold">{{ $entry->name }}</p>
    <p class="text-gray-900 dark:text-gray-100">{{ $entry->message }}</p>
    <small class="block text-gray-500 dark:text-gray-400">{{ $entry->created_at->format('d M Y, H:i') }}</small>

    <div class="mt-4 flex gap-4 items-baseline">
        <x-guestbook-approve-button :entry="$entry" />
        <x-guestbook-delete-button :entry="$entry" />
    </div>
</li>
