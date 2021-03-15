<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsidePageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function applicationform(){
        return view('loanapplication.form');
    }
    
    public function store(){
        dd(request()->all());
      //return redirect()->route('citerempco.loanapplication.complete');
    }
    
    public function complete(){
        
        return view('loanapplication.complete');
    }

    public function deedofassigment(){
        return view('deedsofassigment.index');
    }

    public function promissory(){
        return view('promissory.index');
    }

    public function credit(){
        return view('applicationforcredit.index');
    }
    public function certication(){
        return view('certification.index');
    }
    public function creditlifeinsurance(){
        return view('creditlifeinsurance.index');
    }

    public function emergencyloan(){
        return view('emergenyloan.index');
    }
    
    public function appifadds(){
        return view('appforadds.index');
    }
    public function addsapply(){
        dd(request()->all());
    }
    
    public function loanagreement(){
        return view('loanapplicationagrement.index');
    } 
    
    public function loanagreementapply(){
       dd(request()->all());
    }


    public function creditlifeinsurancestore(){
        dd(request()->all());
    }

    public function logoutfirst () {
        return view('test');
    }
}