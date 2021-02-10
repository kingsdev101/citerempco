<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutsidePageController extends Controller
{
    public function aboutus(){
        return view('welcomepage.aboutus');
    }

    public function home(){
        return view('welcomepage.home');
    }
}
