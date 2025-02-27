<form action="{{ route('guestbook.destroy', $entry) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit"
        class="transition bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
</form>
