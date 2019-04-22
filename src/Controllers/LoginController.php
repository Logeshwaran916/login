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

        switch (config('login.mode')) {
            case 1: return redirect()->route('shudanti.admin');
            case 2: return redirect()->route('shudanti.user');
            default:
                echo 'Login success!';
        }
    }

    public function admin(Request $request) {
        echo "Admin page";
    }

    public function user(Request $request) {
        echo "User page";
    }
}
