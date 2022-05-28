<?php

namespace App\Http\Controllers;

use App\Mail\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $name = $request['name'];
        $surname = $request['surname'];
        $email = $request['email'];
        $text = $request['text'];
        Mail::to('vasiokpavluyk@fmail.com')->send(new Question($name, $surname, $email, $text));
        return view('/home');
    }
}
