<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function authenticate(Request $request)
    {
        $rules = [
            "cpf" => ["required", "min:11", "max:14"],
            "password" => ["required"]
        ];

        $request->validate($rules, $request->all());

        $valid = Auth::attempt([
            "cpf" => str_replace(["-", "."], "", $request->cpf),
            "password" => $request->password
        ]);
        if ($valid) {
            return redirect()->route("home");
        }
        session()->flash("error", "CPF e/ou senha incorretos");
        return redirect()->route("login.index")->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}