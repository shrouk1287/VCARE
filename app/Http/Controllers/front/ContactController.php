<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index(){
        return view("front.contact");
    }
    public function sendMessage(Request $request){
        $message = new Message();
        $message->name= $request->name;
        $message->email= $request->email;
        $message->subject= $request->subject;
        $message->message = $request->content;
        $message->save();
        return redirect('contact')->with('success', 'Data Added Successfully');
    }
}
