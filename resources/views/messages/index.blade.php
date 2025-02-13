
<x-layout>

    <h1>Messages</h1>
    <a href="{{ route('messages.create') }}" class="href">Create Message</a>
    <ul>
        @foreach($messages as $message)
            <h3>{{ $message->from_who }}</h3>
            <h5>Price: {{ $message->price }}</h5>
            <p>{{ $message->message }}</p>
        @endforeach
    </ul>
</x-layout>
