<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "2041720065 / Shine Devi Oktaviana R S P / TI 2C";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID " .$id;
    }
}
