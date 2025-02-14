<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateMessageRequest;


class MessageController extends Controller
{
    public function index(){

        $messages = Message::all();

        return view('messages.index', ['messages' => $messages]); //show the compact as well
    }

    public function create() {
        
        return view('messages.create');
    }

    public function store(ValidateMessageRequest $request){


        // $request->validate([
        //     'from_who' => 'nullable|min:3',
        //     'message' => 'required|max:100',
        //     'price' => 'required|decimal:0,2|max:100'
        // ]);

        Message::create($request->validated());


        return redirect()->route('messages.index');
    }

    public function show(Message $message){
        //show findOrFail if null
        return view('messages.show', compact('message'));

    }
    public function edit(Message $message){
        return view('messages.edit', compact('message'));
    }

    public function update(ValidateMessageRequest $request, Message $message){
        //show here na pwede ma reuse yung validation by creating
        // $request->validate([
        //     'from_who' => 'nullable|min:3',
        //     'message' => 'required|max:100',
        //     'price' => 'required|decimal:0,2|max:100'
        // ]);
        
        $message->update($request->validated());
        return redirect()->route('messages.show', $message->id);
    }


    public function destroy(Message $message){

        $message->delete();

        return redirect()->route('messages.index');
    }
}
