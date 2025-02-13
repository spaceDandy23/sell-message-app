<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function index(){

        $messages = Message::all();

        return view('messages.index', ['messages' => $messages]);
    }

    public function create() {
        
        return view('messages.create');
    }

    public function store(Request $request){

        Message::create($request->all());
        return view('messages.index');
    }
}
