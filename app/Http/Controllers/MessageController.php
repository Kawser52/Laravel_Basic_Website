<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;

class MessageController extends Controller
{
  public function index(){

  }
    public function submit(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required'
        ]);
        $message=new Messages;
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->messages=$request->input('textmessage');
        $message->save();

        return redirect('/')->with('sucess','Message Sent');
    }
    public function getMessageData(){
        $message=Messages::all();
        return view('message')->with('message',$message);
    }

}
