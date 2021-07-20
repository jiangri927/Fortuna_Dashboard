<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailtrapExample;
class UserController extends Controller
{
    //

    public function user_invite(){
        return view('users.invite');
    }

    public function send_invite(Request $request){

        Mail::to($request->email)->send(new MailtrapExample($request));
        return view('users.invite',['code'=>1]);
    }
}
