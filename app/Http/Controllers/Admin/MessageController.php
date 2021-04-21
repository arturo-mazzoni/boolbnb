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
    
}
