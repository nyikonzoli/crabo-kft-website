<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(){
        return view('admin.login');
    }

    public function login(LoginRequest $request){
        $data = $request->validated();
        $data["password"] = $data["passwordd"];
        if (Auth::attempt($data)){
            return redirect()->route('admin.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
