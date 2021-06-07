<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::get();

        return view('msg.index', compact('messages'));
    }

    public function sentMessage(Request $request)
    {
        $message = new Message();
        $message->message = $request->get('message');;
        $message->usuario_id = Auth::id();
        $message->message = date('Y-m-d H:i:s');
        $message->save();

        return redirect()->route('msg.index');
    }
}
