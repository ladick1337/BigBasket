<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

    public function request(Request $req){
        $vars = [
            'link' => $req->link
        ];
        return view('front.request', $vars);
    }

    public function reviews(){
        return view('front.reviews');
    }

    public function article(){
        return view('front.article');
    }

    public function myAdress(){
        return view('front.my-adress');
    }

    public function tovar(){
        return view('front.tovar');
    }

    public function zakaz(){
        return view('front.zakaz');
    }

    public function profile(){
        return view('front.profile');
    }

}
