<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigBasketController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function ebay(){
        return view('front.catalog');
    }

    public function amazon(){
        return view('front.amazon');
    }

    public function tarif(){
        return view('front.tarif');
    }

    public function mf(){
        return view('front.mf');
    }

    public function shops(){
        return view('front.shops');
    }

    public function contacts(){
        return view('front.contacts');
    }

    public function calculate(){
        return view('front.calculate');
    }

    public function faq(){
        return view('front.faq');
    }

    public function openShop(){
        return view('front.open-shop');
    }

    public function sendMail(Request $req){
        $name = $req->name;
        $email = $req->email;
        $message = $req->message;
        $to = "tujh.rexthzds@gmail.com";
        
        $finmessage = $name . " оставил сообщение:\n" . $message;
        $subject = "Обратная связь: вопрос клиента";
        $headers = "From:" . $email;

        mail($to, $subject, $finmessage, $headers);

        return view('front.contacts');
    }
}
