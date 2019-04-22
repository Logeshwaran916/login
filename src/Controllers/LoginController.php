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
        $config = config('test_login.login');
        $username = $request->input($config['username_field_name']);
        $password = $request->input($config['password_field_name']);

        switch ($config['mode']) {
            case 1: return redirect()->route('test.admin');
            case 2: return redirect()->route('test.user');
            default:
                echo 'Login success!';
        }
    }

    public function user(Request $request) {
        echo "User page";
    }
}
