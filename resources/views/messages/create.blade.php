<x-layout>


    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <label for="from_who">From</label>    
        <input type="text" id="from_who" name="from_who">


        <label for="message">Message</label>    
        <textarea name="message" id="message"></textarea>


        <label for="price">Price</label>    
        <input type="number" id="price" name="price">

        <button>Save</button>
    
    </form>



</x-layout>