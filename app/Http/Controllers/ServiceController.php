<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class BigBasketController extends Controller
{

    public function sendMail(Request $req){
        $name = $req->name;
        $email = $req->email;
        $message = $req->message;
        $to = "sales@big-basket.net";
        
        $finmessage = $name . " оставил сообщение:\n" . $message;
        $subject = "Обратная связь: вопрос клиента";
        $headers = "From:" . $email;

        mail($to, $subject, $finmessage, $headers);

        return view('front.contacts');
    }

    public function changeProfile(Request $req) {
        if(Hash::make($req->oldpassword) == User::where('id', Auth::user()->password)) {
            
        }
    }
}
