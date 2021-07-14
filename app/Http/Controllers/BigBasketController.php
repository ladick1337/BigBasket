<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BigBasketController extends Controller
{
    public function index(){
        return view('front.index', ['logged' => Auth::check()]);
    }

    public function ebay(){
        return view('front.catalog', ['logged' => Auth::check()]);
    }

    public function amazon(){
        return view('front.amazon', ['logged' => Auth::check()]);
    }

    public function tarif(){
        return view('front.tarif', ['logged' => Auth::check()]);
    }

    public function mf(){
        return view('front.mf', ['logged' => Auth::check()]);
    }

    public function shops(){
        return view('front.shops', ['logged' => Auth::check()]);
    }

    public function contacts(){
        return view('front.contacts', ['logged' => Auth::check()]);
    }

    public function calculate(){
        return view('front.calculate', ['logged' => Auth::check()]);
    }

    public function faq(){
        return view('front.faq', ['logged' => Auth::check()]);
    }

    public function openShop(){
        return view('front.open-shop', ['logged' => Auth::check()]);
    }

    public function request(){
        return view('front.request', ['logged' => Auth::check()]);
    }

    public function reviews(){
        return view('front.reviews', ['logged' => Auth::check()]);
    }

    public function article(){
        return view('front.article', ['logged' => Auth::check()]);
    }

    public function myAdress(){
        return view('front.my-adress', ['logged' => Auth::check()]);
    }

    public function tovar(){
        return view('front.tovar', ['logged' => Auth::check()]);
    }

    public function zakaz(){
        return view('front.zakaz', ['logged' => Auth::check()]);
    }

    public function profile(){
        return view('front.profile', ['logged' => Auth::check()]);
    }




    public function takeRequest(Request $req) {
       return view('front.request', ['link' => $req->link]);
    }

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
}
