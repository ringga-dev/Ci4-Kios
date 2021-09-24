<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('user/test');
    }
    public function login()
    {
        // return view('welcome_message');
        return view('user/login');
    }
}
