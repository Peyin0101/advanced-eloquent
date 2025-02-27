<form novalidate action="{{ route('guestbook.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-gray-300">Name</label>
        <input type="text"
            class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100"
            id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="message" class="block text-gray-700 dark:text-gray-300">Message</label>
        <textarea
            class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100"
            id="message" name="message" rows="3" required>{{ old('message') }}</textarea>
        @error('message')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit"
        class="transition bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
</form>
