<form action="{{ route('guestbook.update', $entry) }}" method="POST">
    @csrf @method('PUT')
    <button type="submit"
        class="transition bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Approve</button>
</form>
