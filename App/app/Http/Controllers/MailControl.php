<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailControl extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function getOTP()
    {
        return view('getOTP');
    }
}
