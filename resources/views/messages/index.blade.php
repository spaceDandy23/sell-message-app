
<x-layout>
    <h1>Messages</h1>
    <a href="{{ route('messages.create') }}" class="href">Create Message</a>
    <ul>
        @foreach($messages as $message)
            <h3>{{ $message->from_who }}</h3>
            <h5>Price: {{ $message->price }}</h5>
            <p>{{ $message->message }}</p>
            <a href="{{ route('messages.show', $message) }}" class="href">Show</a>
            <form action="{{ route('messages.destroy', $message) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @endforeach
    </ul>
    <!-- php artisan vendor:publish --tag=laravel-pagination -->

    {{ $messages->links('vendor/pagination/simple-default') }}
</x-layout>
