<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
         $usertype=Auth::User()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }else{
            return view('home.userpage');
        }
    }

    public function index(){
        return view('home.userpage');
    }
}
