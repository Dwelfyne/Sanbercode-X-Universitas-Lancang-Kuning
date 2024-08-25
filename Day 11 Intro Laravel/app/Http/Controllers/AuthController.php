<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view("register");
    }
    public function welcome(Request $requet)
    {
        $firstname = $requet->input('ndepan');
        $lastname = $requet->input('nbelakang');

        return view('welcome', ['fistname' => $firstname, 'lastname' => $lastname]);
    }
}
