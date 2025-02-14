<x-layout>

<h1>Create Message</h1>
<x-errors />
<form action="{{ route('messages.store') }}" method="POST">
    <x-messages.form />
</form>



</x-layout>