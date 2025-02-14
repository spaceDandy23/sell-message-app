<x-layout>
    <h1>Show Message</h1>
    <a href="{{ route('messages.edit', $message->id) }}" class="href">Edit</a>
    <h3>{{ $message->from_who }}</h3>
    <h5>Price: {{ $message->price }}</h5>
    <p>{{ $message->message }}</p>

</x-layout>