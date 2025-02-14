@csrf
<label for="from_who">From</label>    
<input type="text" id="from_who" name="from_who" value="{{ old('from_who', $message->from_who ?? '')}}">


<label for="message">Message</label>    
<textarea name="message" id="message">{{ old('message', $message->message ?? '')}}</textarea>


<label for="price">Price</label>    
<input type="number" id="price" name="price" value="{{ old('price', $message->price ?? '')}}">

<button>Save</button>