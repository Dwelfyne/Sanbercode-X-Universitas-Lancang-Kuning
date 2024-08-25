<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view("page.register");
    }
    public function welcome(Request $requet)
    {
        $firstname = $requet->input('ndepan');
        $lastname = $requet->input('nbelakang');

        return view('page.welcome', ['fistname' => $firstname, 'lastname' => $lastname]);
    }
}
