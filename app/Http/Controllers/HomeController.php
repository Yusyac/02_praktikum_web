<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        return ('Selamat Datang');
    }

    public function home(){
        return '<a href= "https://www.educastudio.com/">https://www.educastudio.com/</a>';
    }
}
