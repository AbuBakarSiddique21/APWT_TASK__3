<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        session()->forget('admin');
        session()->forget('employer');
        return redirect()->route('home');
    }
}