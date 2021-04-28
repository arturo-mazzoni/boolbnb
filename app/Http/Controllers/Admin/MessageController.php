<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index(Message $message){

        $messages = Message::all();

        $data = [
            'messages' => $messages
        ];

        return view('admin.message.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newMessage = new Message();

        $newMessage->fill($data);
        
        $newMessage->save();

        return redirect()->route('apartment-detail', $newMessage->property_id)->with('status','messaggio inviato');
    }

}
