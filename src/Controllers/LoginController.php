<?php

namespace Shudanti\Login\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('shudanti.login.login');
    }

    public function postLogin(Request $request)
    {
        $config = config('login.shudanti');
        $username = $request->input($config['username_field_name']);
        $password = $request->input($config['password_field_name']);
        //return view('shudanti.login.login');
        echo "Login success!";
    }
}
