<x-layout>

<h1>Edit Message</h1>

<form action="{{ route('messages.update', $message->id) }}" method="POST">
@method('PATCH')
<x-messages.form :message="$message" />


</form>


</x-layout>